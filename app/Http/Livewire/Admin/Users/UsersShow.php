<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class UsersShow extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.admin.users.users-show');
    }
}
