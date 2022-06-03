<?php

namespace App\Http\Livewire\Backend\Users;

use Livewire\Component;

class UserListComponent extends Component
{
    public $first_name = "sakilmahmud";
    public function createNew()
    {
        dd('created');
    }
    /**
     * display_create_modal
     */

    public function display_create_modal()
    {
        dd('here');
    }

    public function render()
    {
        return view('livewire.backend.users.user-list-component')->layoutData(['meta_title' => 'User List']);
    }
}
