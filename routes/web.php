<?php

use Illuminate\Support\Facades\Route;

// Vista para los invitados
Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

// Rutas de autenticación (login, register, logout, etc.)
Auth::routes();

// Vista protegida para usuarios autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');