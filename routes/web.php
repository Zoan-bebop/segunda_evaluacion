<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta de bienvenida tras el login exitoso
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/', function () {
    return view('welcome');
});
