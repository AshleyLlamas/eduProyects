<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

use Livewire\Component;
use Illuminate\Validation\Rule;

class UsersCreate extends Component
{
    public $name, $email, $role, $password, $password_confirmation;

    public function rules(){
        
        $array = [];

        //User
        $array['name'] = 'required|string|max:255';
        $array['email'] = ['required', 'string', 'email', 'max:255', Rule::unique(User::class)];
        
        //Role
        $array['role'] = ['required'];

        $array['password'] = 'required|confirmed';
    
        return $array;
    }

    public function save(){

        $this->validate();

        //USER  
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->roles()->sync($this->role);

        session()->flash('message', 'Usuario creado satisfactoriamente.');

        return redirect(route('admin.users.index'));
    }

    public function render()
    {
        $roles = Role::orderBy('name')->get();

        return view('livewire.admin.users.users-create', [
            'roles' => $roles
        ]);
    }
}
