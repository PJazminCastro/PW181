
@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

    <h1 class="display-1 text-center text-danger mt-4">Home</h1>

    <x-mensaje mensaje='Este es el welcome' fecha='11/10/2023'></x-mensaje>

@endsection