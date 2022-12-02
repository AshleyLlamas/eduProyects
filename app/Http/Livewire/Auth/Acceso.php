<?php

namespace App\Http\Livewire\Auth;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Acceso extends Component
{
    public $email, $curp;

    protected $queryString = ['email', 'curp'];

    public function search(){

        $student = Student::where('email', $this->email)->where('curp', $this->curp)->first();

        if (Auth::guard('students')->attempt(['email' => $this->email, 'password' => 
            $this->curp])) {
            return redirect()->intended(route('mi.perfil', $student));
        }else{
            return redirect()->route('acceso')->with('error', 'No se encuentran resultados o los datos no coinciden.');
    
            //$this->emit('playAudio');
        }
    }

    public function render()
    {
        return view('livewire.auth.acceso');
    }
}
