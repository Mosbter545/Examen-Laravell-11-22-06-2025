@extends('layouts.app')

@section('titulo', 'Lista de Cursos')

@section('contenido')
    <x-titulo> Cursos </x-titulo>

    <ul class="list-group">
        <li class="list-group-item">Curso de Laravel</li>
        <li class="list-group-item">Curso de PHP</li>
        <li class="list-group-item">Curso de JavaScript</li>
    </ul>
@endsection
