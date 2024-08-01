<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

// Rotas para gerenciamento de quartos
Route::resource('quartos', QuartoController::class)->middleware('auth');

// Rotas para gerenciamento de reservas
Route::resource('reservas', ReservaController::class)->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
