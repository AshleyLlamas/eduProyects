@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Ver asistencia</h1>
@stop

@section('content')
    @livewire('admin.assistances.assistances-show', ['assistance' => $assistance], key($assistance->id))
@stop