@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Todos los cuestionarios</h1>
@stop

@section('content')
    @livewire('admin.questionnaires.questionnaires-index')
@stop