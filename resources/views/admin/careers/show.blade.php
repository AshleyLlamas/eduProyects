@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Ver carrera</h1>
@stop

@section('content')
    @livewire('admin.careers.careers-show', ['career' => $career], key($career->id))
@stop