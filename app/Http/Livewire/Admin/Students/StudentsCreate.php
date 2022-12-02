<?php

namespace App\Http\Livewire\Admin\Students;

use App\Models\Address;
use App\Models\Campus;
use App\Models\Career;
use App\Models\Image;
use App\Models\Municipality;
use App\Models\Schedule;
use App\Models\State;
use App\Models\Student;
use App\Models\Tutor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class StudentsCreate extends Component
{ 
    use WithFileUploads;

    public $foto, $email, $nombre, $sexo, $curp, $matrícula, $grupo, $campus, $semestre, $ciclo_escolar, $career, $turno, $tipo_de_sangre, $qr, $slug;

    //address_id
    public $calle, $número_exterior, $número_interior, $colonia, $código_postal, $state, $municipality, $municipalities;
        //nombres
        public $estado, $municipio;

    //Seguro
    public $número_de_afiliación, $tipo_de_aseguranza;

    //Tutor
    public $nombre_del_tutor, $email_del_tutor, $celular_del_tutor, $teléfono_del_tutor;

    //Schedule
    public $days = [];
    public $días_de_trabajo_a_la_semana, $hora_de_entrada, $hora_de_salida;

    public function rules(){
        
        $array = [];

        $array['foto'] = 'required|image|mimes:jpeg,jpg,png|max:5048';
        $array['email'] = ['required', 'string', 'email', 'max:255', Rule::unique(Student::class)];
        $array['nombre'] = 'required|string|max:255';
        $array['sexo'] = 'required|string|max:255';
        $array['curp'] = ['required', 'string', 'min:18', 'max:18', 'regex:/^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/', 'unique:students,curp'];
        $array['matrícula'] = 'required|string|max:255';
        $array['grupo'] = 'required|string|max:255';
        $array['campus'] = 'required';
        $array['semestre'] = 'required|numeric|max:255';
        $array['ciclo_escolar'] = 'required|string|max:255';
        $array['career'] = 'required';
        $array['turno'] = 'required|string|max:255';
        $array['tipo_de_sangre'] = 'required|string|max:255';
        $array['qr'] = 'required|string|max:255';
        $array['slug'] = 'required|string|max:255';

        if($this->calle || $this->colonia || $this->state || $this->municipality){
            $array['calle'] = ['required', 'string', 'max:250'];
            $array['número_interior'] = 'nullable|numeric';
            $array['número_exterior'] = 'nullable|string|max:250';
            $array['código_postal'] = 'nullable|string|max:250';
            $array['colonia'] = ['required', 'string', 'max:250'];

            $array['state'] = 'required';
            $array['municipality'] = 'required';
        }

        if(count($this->days)){
            foreach($this->days as $n => $day){
                $array['hora_de_entrada.'.$n] = 'required';
                $array['hora_de_salida.'.$n] = 'required';
            }
        }
    
        return $array;
    }

    protected $messages = [
        'municipality.required' => 'El campo municipio es obligatorio.',
        'state.required' => 'El campo estado es obligatorio.',
        'hora_de_entrada.*.required' => 'La hora de entrada es obligatorio.',
        'hora_de_salida.*.required' => 'La hora de salida es obligatorio.',
    ];

    public function updatednombre($nombre){
        $this->slug = SlugService::createSlug(Student::class, 'slug', $nombre)."-".Str::random(3);
    }

    public function updatedemail($email){
        $this->qr = 'email='.$this->email.'&curp='.$this->curp;
    }

    public function updatedcurp($curp){
        $this->qr = 'email='.$this->email.'&curp='.$this->curp;
    }
    
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

        $student = Student::create([
            'email' => $this->email,
            'password' => Hash::make($this->curp),
            'nombre' => $this->nombre,
            'sexo' => $this->sexo,
            'curp' => $this->curp,
            'address_id' => $address_id,
            'matrícula' => $this->matrícula,
            'grupo' => $this->grupo,
            'campus_id' => $this->campus,
            'semestre' => $this->semestre,
            'ciclo_escolar' => $this->ciclo_escolar,
            'career_id' => $this->career,
            'turno' => $this->turno,
            'qr' => $this->qr,
            'slug' => $this->slug
        ]);

        //FOTO
        Image::create([
            'url' => $this->foto->store('fotos'),
            'imageable_id' => $student->id,
            'imageable_type' => 'App\Models\Student'
        ]);

        Tutor::create([
            'nombre' => $this->nombre_del_tutor,
            'email' => $this->email_del_tutor,
            'celular' => $this->celular_del_tutor,
            'teléfono' => $this->teléfono_del_tutor,
            'student_id' => $student->id
        ]);

        foreach($this->days as $n => $day){
            Schedule::create([
                'día' => $day,
                'hora_de_entrada' => $this->hora_de_entrada[$n],
                'hora_de_salida' => $this->hora_de_salida[$n],
                'turno' => null,
                'student_id' => $student->id,
                'actual' => true
            ]);
        }

        session()->flash('message', 'Estudiante creado satisfactoriamente.');

        return redirect(route('admin.students.index'));
    }

    public function render()
    {
        $careers = Career::orderBy('carrera')->get();
        $campuses = Campus::orderBy('campus')->get();
        $states = State::orderBy('nombre_del_estado')->get();

        return view('livewire.admin.students.students-create', [
            'careers' => $careers,
            'campuses' => $campuses,
            'states' => $states 
        ]);
    }
}
