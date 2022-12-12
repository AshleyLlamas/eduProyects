<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assistance;
use Illuminate\Http\Request;

class AssistanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.assistances.index')->only('index');
        $this->middleware('can:admin.assistances.show')->only('show');
    }

    public function index(){
        /*
        $assistances = Assistance::whereHas('check', function($query) {
            $query->where('fecha', '=', $this->date);
        })->paginate();

        $asistencias = $assistances->where('asistencia', '=', 'Asistió')->count();
        $retardos = $assistances->where('asistencia', '=' ,'Con retardo')->count();
        $faltantes = $assistances->where('asistencia', '=', 'No asistió')->count();
        */
        return view('admin.assistances.index'/*, [
            'assistances' => $assistances,
            'asistencias' => $asistencias,
            'retardos' => $retardos,
            'faltantes' => $faltantes
        ]*/);
    }

    public function show(Assistance $assistance)
    {
        return view('admin.assistances.show', compact('assistance'));
    }
}
