@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center mb-1">Todos los usuarios</h1>
@stop

@section('content')
    @livewire('admin.users.users-index')
@stop