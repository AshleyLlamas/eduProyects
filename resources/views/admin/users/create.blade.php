@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center mb-1">Nuevo usuario</h1>
@stop

@section('content')
    @livewire('admin.users.users-create')
@stop