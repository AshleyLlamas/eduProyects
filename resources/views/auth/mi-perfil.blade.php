@extends('layouts.app')

@section('content')
    <div class="container py-4">
        @livewire('auth.mi-perfil')
    </div>
@endsection

@section('css')
    <link href="{{ asset('css/mi-perfil.css') }}" rel="stylesheet">
@endsection