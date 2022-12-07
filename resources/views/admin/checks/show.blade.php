@extends('adminlte::page')

@section('title', 'Panel Administrativo')

@section('content_header')
    <h1 class="text-center mb-1">Ver check</h1>
@stop

@section('content')
    @livewire('admin.checks.checks-show', ['check' => $check], key($check->id))
@stop