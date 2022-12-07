@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Todos los checks</h1>
@stop

@section('content')
    @livewire('admin.checks.checks-index')
@stop