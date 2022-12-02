<?php

namespace App\Http\Livewire\Admin\Careers;

use App\Models\Career;
use Livewire\Component;

class CareersCreate extends Component
{
    public $carrera, $abreviatura;

    public function rules(){
        
        $array = [];
    
        $array['carrera'] = 'required|string|max:255';
        $array['abreviatura'] = 'required|string|max:255';
    
        return $array;
    }

    public function save(){

        $this->validate();

        Career::create([
           'carrera' => $this->carrera,
           'abreviatura' => $this->abreviatura 
        ]);

        session()->flash('message', 'Carrera creado satisfactoriamente.');

        return redirect(route('admin.careers.index'));
    }

    public function render()
    {
        return view('livewire.admin.careers.careers-create');
    }
}
