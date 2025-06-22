<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
   public function create() {
    return view('cursos.create');
}

public function show($nombre, $duracion, $categoria)
{
    $duracionSemanas = (int) $duracion;

    $duracionHoras = $duracionSemanas * 4;

    return view('cursos.show', compact('nombre', 'duracion', 'categoria', 'duracionHoras'));
}

public function index() {
    return view('cursos.index');
}

public function edit($nombre, $duracion, $categoria)
{
    // Pasamos los datos a la vista para mostrarlos en el formulario
    return view('cursos.edit', compact('nombre', 'duracion', 'categoria'));
}


















}
