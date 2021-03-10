<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\MusicaIndigenaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('artistas',ArtistaController::class);
Route::resource('listas',MusicaIndigenaController::class);
Route::get('lista1/{id}', [App\Http\Controllers\MusicaIndigenaController::class, 'index'])->name('lista1');
Route::get('lista1/{id}/create/', [App\Http\Controllers\MusicaIndigenaController::class, 'create'])->name('lista1/create');

