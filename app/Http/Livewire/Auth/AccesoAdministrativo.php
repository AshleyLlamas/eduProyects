<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AccesoAdministrativo extends Component
{
    public $email, $password;

    public function search()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('acceso.administrativo')->with('error', 'No se encuentran resultados o los datos no coinciden.');
        }
    }

    public function render()
    {
        return view('livewire.auth.acceso-administrativo');
    }
}
