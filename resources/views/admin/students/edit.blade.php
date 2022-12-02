@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1 class="text-center mb-1">Editar estudiante</h1>
@stop

@section('content')
    @livewire('admin.students.students-edit', ['student' => $student], key($student->id))
@stop