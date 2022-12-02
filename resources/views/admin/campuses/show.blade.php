@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Ver campus</h1>
@stop

@section('content')
    @livewire('admin.campuses.campuses-show', ['campus' => $campus], key($campus->id))
@stop