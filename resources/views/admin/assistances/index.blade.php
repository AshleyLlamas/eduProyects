@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Todas las asistencias</h1>
@stop

@section('content')
    @livewire('admin.assistances.assistances-index')
@stop

{{-- @if ($assistances->count())
        <div class="card">
            <div class="card-header bg-navy">
                <h5 class="text-center mb-1">Grafica de asistencia</h5>
            </div>
            <div class="card-body">
                <div>
                    <canvas id="myChartAsistenciasPie"></canvas>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>
    @endif
@stop --}}