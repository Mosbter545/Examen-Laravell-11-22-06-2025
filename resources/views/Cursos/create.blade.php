@extends('layouts.app')

@section('titulo', 'Crear Nuevo Curso')

@section('contenido')
    <x-titulo> Crear Nuevo Curso  </x-titulo>

    <form>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Curso</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Laravel Básico">
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (semanas)</label>
            <input type="number" class="form-control" id="duracion" name="duracion" placeholder="Ejemplo: 8">
        </div>

        <div class="mb-3">
            <label for="categoria" class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ejemplo: Programación">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Curso</button>
    </form>
@endsection