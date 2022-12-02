@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Nuevo campus</h1>
@stop

@section('content')
    @livewire('admin.campuses.campuses-create')
@stop