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

    /**
     * Create user
     * @return redirect back
     */
    public function create()
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
            $this->user = [];
            return back();
        } catch (\Throwable $th) {
            ## Throw error message (throw $th) ##

        }
    }
    /**
     * Display create modal
     * @return view modal window
     */
    public function add_modal()
    {
        $this->dispatchBrowserEvent('add_modal');
    }
    /**
     * Rendering page
     * @return view user list
     */
    public function render()
    {
        $users = User::latest()->paginate();
        return view('livewire.backend.users.user-list-component', compact('users'))->layoutData(['page_title' => 'User List']);
    }
}
