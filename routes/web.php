<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');

Route::get('/team', [HomeController::class, 'team'])->name('team');

Route::get('/mensajes', [HomeController::class, 'mensajes'])->name('mensajes');

Route::post('/admin-email', [HomeController::class, 'nuevoContacto'])->name('nuevoContacto');

Route::post('/clients', [HomeController::class, 'store'])->name('clients');

Route::get('/client', [HomeController::class, 'show'])->name('client');

Route::post('/mensaje', MensajesController::class)->name('mensaje');
