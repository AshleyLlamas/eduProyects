<?php

namespace App\Http\Livewire\Auth;

use App\Models\Assistance;
use App\Models\Check;
use App\Models\Schedule;
use App\Models\TimeCheck;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MiPerfil extends Component
{
    public $student;

    public $check;

    public function __construct()
    {
        $this->student = Auth::guard('students')->user();
        $this->check = Check::where('student_id', Auth::guard('students')->user()->id)->where('fecha', Carbon::now()->formatLocalized('%Y-%m-%d'))->get()->last();
    }

    public function cheking(){

        switch(substr(Carbon::now()->formatLocalized('%A'), 0, 2)){
            case "lu":
                $clave = "Lunes";
            break;
            case "ma":
                $clave = "Martes";
            break;
            case "mi":
                $clave = "Miercoles";
            break;
            case "ju":
                $clave = "Jueves";
            break;
            case "vi":
                $clave = "Viernes";
            break;
            case "sa":
                $clave = "Sabado";
            break;
            case "do":
                $clave = "Domingo";
            break;
        }

        $fecha_a_comparar = Schedule::where('student_id', $this->student->id)->where('día', $clave)->get()->last();

        if($this->check){
            //Va de salida
            if($fecha_a_comparar){
                //Comparar para saber si sale antes
    
                if($fecha_a_comparar->hora_de_salida->getTimestamp() >= Carbon::now()->getTimestamp()){

                    $out_estatus = 'Salió antes de tiempo';
                    $out_observación = $fecha_a_comparar->hora_de_salida->diff(Carbon::now())->format('por %h horas %i minutos con %s segundos');
                }else{
                    $out_estatus = 'Salió despues';
                    $out_observación = $fecha_a_comparar->hora_de_salida->diff(Carbon::now())->format('por %h horas %i minutos con %s segundos');
                }
    
                $out = TimeCheck::create([
                    'hora' => Carbon::now(),
                    'estatus' => $out_estatus,
                    'observación' => $out_observación
                ]);

                if($this->check->in == 'Llego tarde'){
                    $asistencia = 'Con retardo';
                }else{
                    $asistencia = 'Asistió';
                }
                
    
                $this->check->out_id = $out->id;
                $this->check->save();

                Assistance::create([
                    'check_id' => $this->check->id,
                    'student_id' => $this->student->id,
                    'asistencia' => $asistencia,
                    'observación' => 'Asistencia completa'
                ]);
    
            }else{
                //Hoy no tiene clases, agregar asistencia
                
                $tiempo = $this->check->in->created_at->diff(Carbon::now())->format('%h horas %i minutos con %s segundos');

                $out = TimeCheck::create([
                    'hora' => Carbon::now(),
                    'estatus' => 'Sin horario',
                    'observación' => 'Asistió aunque no tuviera clases'
                ]);

                $this->check->out_id = $out->id;
                $this->check->save();

                Assistance::create([
                    'check_id' => $this->check->id,
                    'student_id' => $this->student->id,
                    'asistencia' => 'Asistió',
                    'observación' => 'Asistió aunque no tuviera clases: '.$tiempo. 'desde el primer check'
                ]);
            }

        }else{
            //Apenas esta entrando
            if($fecha_a_comparar){

                if($fecha_a_comparar->hora_de_entrada->modify('+15 minute')->getTimestamp() >= Carbon::now()->getTimestamp()){
                    $in_estatus = 'Llego a tiempo';
                    $in_observación = 'Sin observación';
                }else{
                    $in_estatus = 'Llego tarde';
                    $in_observación = $fecha_a_comparar->hora_de_entrada->diff(Carbon::now())->format('por %h horas %i minutos con %s segundos');
                }
    
                $in = TimeCheck::create([
                    'hora' => Carbon::now(),
                    'estatus' => $in_estatus,
                    'observación' => $in_observación
                ]);
    
                Check::create([
                    'fecha' => Carbon::now(),
                    'in_id' => $in->id,
                    'out_id' => null,
                    'student_id' => $this->student->id,
                    'schedule_id' => $fecha_a_comparar->id
                ]);
    
            }else{
                //Hoy no tiene clases, agregar asistencia y notificar si es tiempo extra.
    
                $in = TimeCheck::create([
                    'hora' => Carbon::now(),
                    'estatus' => 'Sin horario',
                    'observación' => 'Asistió aunque no tuviera clases'
                ]);
    
                Check::create([
                    'fecha' => Carbon::now(),
                    'in_id' => $in->id,
                    'out_id' => null,
                    'student_id' => $this->student->id,
                    'schedule_id' => null //Este dia no se encuentra en su horario
                ]);
            }
        }

        session()->flash('message', 'Checado satisfactoriamente.');

        return redirect(route('mi.perfil'));
    }

    public function render()
    {
        //ASISTENCIAS
        $número_de_asistencias = Assistance::all()->count();

        $número_de_faltas = Assistance::where('student_id', $this->student->id)->where('asistencia', 'No asistió')->count();

        $número_de_retardos = Check::where('student_id', $this->student->id)->whereHas('in', function($query) {
            $query->where('estatus', '=', 'Llego tarde');
        })->count();

        if($número_de_faltas == 0 || $número_de_asistencias == 0){
            $porcentaje_de_faltas = 0;
        }else{
            $porcentaje_de_faltas = ($número_de_faltas/$número_de_asistencias)*100;
        }

        if($número_de_retardos == 0 || $número_de_asistencias == 0){
            $porcentaje_de_retardos = 0;
        }else{
            $porcentaje_de_retardos = ($número_de_retardos/$número_de_asistencias)*100;
        }

        return view('livewire.auth.mi-perfil', [
            'porcentaje_de_faltas' => $porcentaje_de_faltas,
            'porcentaje_de_retardos' => $porcentaje_de_retardos
        ]);
    }
}
