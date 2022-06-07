<?php

namespace App\Http\Livewire\Backend\Users;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;

class UserListComponent extends Component
{
    public $user = [];
    public $is_edit = false;


    /**
     * Display create modal
     * @return view modal window
     */
    public function create()
    {
        $this->is_edit = false;
        $this->user = [];
        $this->dispatchBrowserEvent('add_modal_event');
    }


    /**
     * Store new user
     * @return redirect back
     */
    public function store()
    {
        ## Validate inputs ##
        $inputs                     = Validator::make($this->user, [
            'name'                  => ['required'],
            'email'                 => ['required', 'email', 'unique:users,email'],
            'mobile'                => ['required', 'unique:users,mobile'],
            'password'              => ['required', 'confirmed', Password::min(6)],
        ])->validate();

        try {
            ## Create new user ##
            $new_user = new User();
            $new_user->name         = $inputs['name'];
            $new_user->email        = $inputs['email'];
            $new_user->mobile       = $inputs['mobile'];
            $new_user->password     = bcrypt($inputs['password']);
            $new_user->token        = Str::random(60);
            $new_user->save();

            ## Reset user data ##
            $this->user = [];

            ## Dispatch browser event
            $this->dispatchBrowserEvent('toast_event');

            return back();
        } catch (\Throwable $th) {
            ## Throw error message (throw $th) ##

        }
    }


    /**
     * Display edit modal
     * @return view modal window
     */
    public function edit(User $user)
    {
        $this->user = $user->toArray();
        $this->is_edit = true;
        $this->dispatchBrowserEvent('add_modal_event');
    }


    /**
     * Update existing user
     * @return redirect back
     */
    public function update()
    {
        ## Find existing user ##
        $existing_user = User::find($this->user['id']);

        ## Validate inputs ##
        $inputs                     = Validator::make($this->user, [
            'name'                  => ['required'],
            'email'                 => ['required', 'email', 'unique:users,email,' . $this->user['id']],
            'mobile'                => ['required', 'unique:users,mobile,' . $this->user['id']],
            'password'              => ['sometimes', 'confirmed', Password::min(6)],
        ])->validate();

        try {
            if (isset($inputs['password']) && !empty($inputs['password'])) {
                $inputs['password'] = bcrypt($inputs['password']);
            }

            ## Update existing user info ##
            $existing_user->update($inputs);

            ## Dispatch toast alert to browser
            $this->dispatchBrowserEvent('toast_event');

            return back();
        } catch (\Throwable $th) {
            ## Throw error message (throw $th) ##

        }
    }


    /**
     * Show user details on modal
     * @return view modal window with user details
     */
    public function show(User $user)
    {
        dd($user);
        $this->user = $user;
        $this->dispatchBrowserEvent('show_modal_event');
    }

    /**
     * Rendering page
     * @return view user list
     */
    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.backend.users.user-list-component', compact('users'))->layoutData(['page_title' => 'User List']);
    }
}
