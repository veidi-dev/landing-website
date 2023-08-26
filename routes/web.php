<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/politica-privacidade', [App\Http\Controllers\HomeController::class, 'politica'])->name('politica');

Route::post('/quero-ser-parceiro', [App\Http\Controllers\HomeController::class, 'quero_ser_parceiro'])->name('quero_ser_parceiro');
