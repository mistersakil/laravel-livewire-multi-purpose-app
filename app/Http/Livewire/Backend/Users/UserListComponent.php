<?php

namespace App\Http\Livewire\Backend\Users;

use Livewire\Component;

class UserListComponent extends Component
{
    public $user = [];

    public function createNew()
    {
        dd('created');
    }
    /**
     * Create user
     */
    public function create()
    {
        dd($this->user);
    }
    /**
     * display_create_modal
     */
    public function add_modal()
    {
        $this->dispatchBrowserEvent('add_modal');
    }

    public function render()
    {
        return view('livewire.backend.users.user-list-component')->layoutData(['page_title' => 'User List']);
    }
}
