@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Editar cuestionario</h1>
@stop

@section('content')
    @livewire('admin.questionnaires.questionnaires-edit', ['questionnaire' => $questionnaire], key($questionnaire->id))
@stop