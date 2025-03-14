<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------------------------------------------------------
// CATEGORIA
// -----------------------------------------------------------------------------

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');