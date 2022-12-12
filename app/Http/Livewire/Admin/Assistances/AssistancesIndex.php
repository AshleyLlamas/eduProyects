<?php

namespace App\Http\Livewire\Admin\Assistances;

use App\Models\Assistance;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class AssistancesIndex extends Component
{
    use WithPagination;

    public $search, $order, $date;
    public $sort = 'id';
    public $direction = 'desc';
    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function updatedorder($order){
        if($order == 1){
            $this->direction = 'asc';
        }
        switch($order){
            case 1:
                $this->sort = 'id';
                $this->direction = 'desc';
            break;
            case 2:
                $this->sort = 'id';
                $this->direction = 'asc';
            break;
        }
    }

    public function __construct()
    {
        $hoy = Carbon::now();
        $this->date = $hoy->format('Y-m-d');
    }

    public function render()
    {
        $assistances = Assistance::whereHas('check', function($query) {
            $query->where('fecha', '=', $this->date);
        })->paginate();
        
        $all_assistances = $assistances->count();

        $asistencias = $assistances->where('asistencia', '=', 'Asistió')->count();
        $retardos = $assistances->where('asistencia', '=' ,'Con retardo')->count();
        $faltantes = $assistances->where('asistencia', '=', 'No asistió')->count();

        return view('livewire.admin.assistances.assistances-index', [
            'assistances' => $assistances,
            'all_assistances' => $all_assistances,
            'asistencias' => $asistencias,
            'retardos' => $retardos,
            'faltantes' => $faltantes
        ]);
    }
}
