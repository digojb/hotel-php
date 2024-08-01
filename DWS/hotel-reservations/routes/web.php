<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// Rotas para gerenciamento de quartos
Route::resource('quartos', QuartoController::class);

// Rotas para gerenciamento de reservas
Route::resource('reservas', ReservaController::class);
