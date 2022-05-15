<?php

namespace App\Http\Livewire\Backend\Users;

use Livewire\Component;

class UserListComponent extends Component
{
    public function render()
    {
        return view('livewire.backend.users.user-list-component')->layoutData(['meta_title' => 'User List']);
    }
}
