@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Nueva carrera</h1>
@stop

@section('content')
    @livewire('admin.careers.careers-create')
@stop