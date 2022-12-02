<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MiPerfil extends Component
{
    public $student;

    public function __construct()
    {
        $this->student = Auth::guard('students')->user();
    }

    public function render()
    {
        return view('livewire.auth.mi-perfil');
    }
}
