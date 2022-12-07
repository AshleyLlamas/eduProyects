@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Ver cuestionario</h1>
@stop

@section('content')
    @livewire('admin.questionnaires.questionnaires-show', ['questionnaire' => $questionnaire], key($questionnaire->id))
@stop