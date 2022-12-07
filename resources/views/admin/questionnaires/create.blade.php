@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Nuevo cuestionario</h1>
@stop

@section('content')
    @livewire('admin.questionnaires.questionnaires-create')
@stop