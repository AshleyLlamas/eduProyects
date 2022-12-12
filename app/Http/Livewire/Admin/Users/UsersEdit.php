<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersEdit extends Component
{
    public $user, $role, $password, $password_confirmation;

    public function mount(User $user)
    {
        $this->user = $user;

        if($user->roles->count()){
            $this->role = $user->roles->pluck('id')[0];
        }
    }

    public function rules(){
        
        $array = [];
    
        $array['user.name'] = 'required|string|max:255';
        $array['user.email'] = ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$this->user->id];
            
        $array['role'] = ['required'];

        if($this->password || $this->password_confirmation){
            $array['password'] = 'required|confirmed';
        }
    
        return $array;
    }

    public function save(){

        $this->validate();
        
        $this->user->roles()->sync($this->role);

        if($this->password || $this->password_confirmation){
            $this->user->password = Hash::make($this->password);
        }

        $this->user->save();

        session()->flash('message', 'Usuario editado satisfactoriamente.');
    
        return redirect(route('admin.users.index'));
    }

    public function render()
    {
        $roles = Role::orderBy('name')->get();

        return view('livewire.admin.users.users-edit', [
            'roles' => $roles
        ]);
    }
}
