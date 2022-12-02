@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Editar campus</h1>
@stop

@section('content')
    @livewire('admin.campuses.campuses-edit', ['campus' => $campus], key($campus->id))
@stop