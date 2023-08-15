<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MusicStyleController;

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');

Route::resource('artists',ArtistController::class);
Route::resource('listas',SongController::class);
Route::get('albums/{id}', [App\Http\Controllers\AlbumController::class, 'show'])->name('albums.show');
Route::get('songs/{id}', [App\Http\Controllers\SongController::class, 'index'])->name('songs');
Route::get('songs/{id}', [App\Http\Controllers\SongController::class, 'index'])->name('songs');
Route::get('songs-album/{id}', [App\Http\Controllers\SongController::class, 'showByAlbum'])->name('songs-album');
Route::get('songs-artist/{id}', [App\Http\Controllers\SongController::class, 'showByArtist'])->name('songs-artist');
Route::get('lista1/{id}/create/', [App\Http\Controllers\SongController::class, 'create'])->name('lista1/create');
//Route::resource('music-styles', MusicStyleController::class);
Route::get('music-styles/{id}', [MusicStyleController::class, 'index'])->name('music-styles.index');

