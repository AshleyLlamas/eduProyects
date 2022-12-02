<?php

namespace App\Http\Livewire\Admin\Campuses;

use App\Models\Address;
use App\Models\Campus;
use App\Models\Municipality;
use App\Models\State;
use Illuminate\Contracts\Validation\Rule;
use Livewire\Component;

class CampusesCreate extends Component
{
    public $campus;

    //address_id
    public $calle, $número_exterior, $número_interior, $colonia, $código_postal, $state, $municipality, $municipalities;
        //nombres
        public $estado, $municipio;

    public function rules(){
        
        $array = [];
    
        $array['campus'] = 'required|string|max:255';
            
        if($this->calle || $this->colonia || $this->state || $this->municipality){
            $array['calle'] = ['required', 'string', 'max:250'];
            $array['número_interior'] = 'nullable|numeric';
            $array['número_exterior'] = 'nullable|string|max:250';
            $array['código_postal'] = 'nullable|string|max:250';
            $array['colonia'] = ['required', 'string', 'max:250'];

            $array['state'] = 'required';
            $array['municipality'] = 'required';
        }
    
        return $array;
    }

    protected $messages = [
        'municipality.required' => 'El campo municipio es obligatorio.',
        'state.required' => 'El campo estado es obligatorio.',
    ];
    
    public function updatedstate($state){
        $this->municipalities = Municipality::orderBy('nombre_del_municipio')->where('state_id', $state)->get();
        $this->estado = State::orderBy('nombre_del_estado')->where('id', $state)->get()->first()->nombre_del_estado;
    }
    
    public function updatedmunicipality($municipality){
        $this->municipio = Municipality::orderBy('nombre_del_municipio')->where('id', $this->municipality)->get()->first()->nombre_del_municipio;
    }

    public function spacing(){
        if($this->calle == ""){
            $this->calle = null;
        }

        if($this->número_interior == ""){
            $this->número_interior = null;
        }

        if($this->número_exterior == ""){
            $this->número_exterior = null;
        }

        if($this->código_postal == ""){
            $this->código_postal = null;
        }

        if($this->colonia == ""){
            $this->colonia = null;
        }
    }

    public function save(){

        $this->validate();
        $this->spacing();

        if($this->calle || $this->colonia || $this->state || $this->municipality){
            $address = Address::create([
                'calle' => $this->calle,
                'número_exterior' => $this->número_exterior,
                'número_interior' => $this->número_interior,
                'código_postal' => $this->código_postal,
                'colonia' => $this->colonia,
                'municipality_id' => $this->municipality
            ]);

            $address_id = $address->id;
        }else{
            $address_id = null;
        }

        Campus::create([
            'campus' => $this->campus,
            'address_id' => $address_id
        ]);

        session()->flash('message', 'Campus creado satisfactoriamente.');

        return redirect(route('admin.campuses.index'));
    }

    public function render()
    {
        $states = State::orderBy('nombre_del_estado')->get();

        return view('livewire.admin.campuses.campuses-create', [
            'states' => $states
        ]);
    }
}
