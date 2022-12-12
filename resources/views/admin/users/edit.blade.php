@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1 class="text-center mb-1">Editar usuario</h1>
@stop

@section('content')
    @livewire('admin.users.users-edit', ['user' => $user], key($user->id))
@stop