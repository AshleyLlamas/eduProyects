@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Todas las asistencias</h1>
@stop

@section('content')
    @livewire('admin.assistances.assistances-index')
@stop