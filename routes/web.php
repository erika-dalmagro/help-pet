<?php

use Illuminate\Support\Facades\Route;

$controller_path = 'App\Http\Controllers';

// Main Page
Route::get('/', [App\Http\Controllers\SobreController::class, 'index'])->name('sobre');

// Usuários/Login
Route::get('/login', [App\Http\Controllers\auth\AuthController::class, 'index'])->name('auth.login');
Route::post('/autenticar', [App\Http\Controllers\auth\AuthController::class, 'autenticar'])->name('autenticar');
Route::get('/logout', [App\Http\Controllers\auth\AuthController::class, 'logout'])->name('logout');

// Como Funciona
Route::get('/ongs', [App\Http\Controllers\SobreController::class, 'ongs'])->name('ongs');
Route::get('/como-funciona', [App\Http\Controllers\SobreController::class, 'comoFunciona'])->name('comoFunciona');

// Quero adotar
Route::get('/quero-adotar', [App\Http\Controllers\PetController::class, 'index'])->name('adotar.index');

//Pet
Route::get('/pet', [App\Http\Controllers\PetController::class, 'index'])->name('pet.index');
Route::get('/pet/adicionar', [App\Http\Controllers\PetController::class, 'adicionar'])->name('pet.adicionar');
Route::post('/pet', [App\Http\Controllers\PetController::class, 'salvar'])->name('pet.salvar');
Route::get('/pet/excluir/{id}', [App\Http\Controllers\PetController::class, 'excluir'])->name('pet.excluir');
Route::get('/pet/editar/{id}', [App\Http\Controllers\PetController::class, 'editar'])->name('pet.editar');
Route::put('/pet/{id}', [App\Http\Controllers\PetController::class, 'atualizar'])->name('pet.atualizar');
Route::get('/pet/detalhes/{id}', [App\Http\Controllers\PetController::class, 'detalhar'])->name('pet.detalhar');

//Formulario
Route::get('/formulario', [App\Http\Controllers\FormularioController::class, 'index'])->name('formulario.index');
Route::get('/formulario/adicionar/{id}', [App\Http\Controllers\FormularioController::class, 'adicionar'])->name('formulario.adicionar');
Route::post('/formulario', [App\Http\Controllers\FormularioController::class, 'salvar'])->name('formulario.salvar');
Route::get('/formulario/excluir/{id}', [App\Http\Controllers\FormularioController::class, 'excluir'])->name('formulario.excluir');
Route::get('/formulario/aprovar/{id}', [App\Http\Controllers\FormularioController::class, 'aprovar'])->name('formulario.aprovar');
Route::get('/formulario/{id}', [App\Http\Controllers\FormularioController::class, 'reprovar'])->name('formulario.reprovar');
Route::get('/formulario/detalhes/{id}', [App\Http\Controllers\FormularioController::class, 'detalhar'])->name('formulario.detalhar');