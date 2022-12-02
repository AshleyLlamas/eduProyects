@extends('adminlte::page')

@section('title', 'Estudiantes')

@section('content_header')
    <h1 class="text-center mb-1">Ver estudiante</h1>
@stop

@section('content')
    @livewire('admin.students.students-show', ['student' => $student], key($student->id))
@stop