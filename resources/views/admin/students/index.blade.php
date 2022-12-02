@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1 class="text-center mb-1">Todos los estudiantes</h1>
@stop

@section('content')
    @livewire('admin.students.students-index')
@stop