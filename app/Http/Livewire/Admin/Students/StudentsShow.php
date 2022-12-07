<?php

namespace App\Http\Livewire\Admin\Students;

use App\Models\Assistance;
use App\Models\Check;
use Carbon\Carbon;
use Livewire\Component;

class StudentsShow extends Component
{
    public $student;
    
    public function render()
    {
        //ASISTENCIAS
        $faltas = Assistance::where('student_id', $this->student->id)->where('asistencia', 'No asistió')->count();

        $retardos = Check::where('student_id', $this->student->id)->whereHas('in', function($query) {
            $query->where('estatus', '=', 'Llego tarde');
        })->count();

        //substr( $assistance->check->in->estatus, 0, 11 )

        //CALENDAR
        $hoy = Carbon::now()->format('Y-m-d');

        $json_dias = array();

        foreach(Assistance::where('student_id', $this->student->id)->get() as $assistance){

            if($assistance->asistencia == 'No asistió'){
                $color = 'red';
            }else{
                $color = 'gray';
            }

            $json_dias[] = array(
              'title' => $assistance->asistencia,
              'start' => date('Y-m-d\TH:i:s', strtotime($assistance->check->fecha)),
              'end' => date('Y-m-d\TH:i:s', strtotime($assistance->check->fecha)),
              'allDay' => true,
              'color' => $color,
              'url' => route('admin.assistances.show', $assistance)
            );
        }


        return view('livewire.admin.students.students-show', [
            'faltas' => $faltas,
            'retardos' => $retardos,
            'hoy' => $hoy,
            'json_dias' => $json_dias
        ]);
    }
}
