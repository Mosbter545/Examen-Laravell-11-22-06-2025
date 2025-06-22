<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CursoController;

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/{nombre}/{duracion}/{categoria}', [CursoController::class, 'show']);
Route::get('/cursos/create', [CursoController::class, 'create']);
Route::get('/cursos/{nombre}/{duracion}/{categoria}/edit', [CursoController::class, 'edit']);