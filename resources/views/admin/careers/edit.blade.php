@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Editar carrera</h1>
@stop

@section('content')
    @livewire('admin.careers.careers-edit', ['career' => $career], key($career->id))
@stop