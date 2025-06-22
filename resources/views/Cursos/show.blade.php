@extends('layouts.app')

@section('titulo', "Detalles del curso: $nombre")

@section('contenido')
    <x-titulo> Detalles del Curso:  </x-titulo>

    <ul class="list-group mb-3">
        <li class="list-group-item"><strong>Nombre:</strong> {{ $nombre }}</li>
        <li class="list-group-item"><strong>Duración:</strong> {{ $duracion }} semanas</li>
        <li class="list-group-item"><strong>Duración en horas:</strong> {{ $duracionHoras }} horas</li>
        <li class="list-group-item"><strong>Categoría:</strong> {{ $categoria }}</li>
        <li class="list-group-item">
            <strong>Tipo de Curso:</strong>
            @if ($duracionHoras < 20)
                Curso corto
            @elseif ($duracionHoras >= 20 && $duracionHoras <= 32)
                Curso medio
            @else
                Curso largo
            @endif
        </li>
    </ul>
@endsection
