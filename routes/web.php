<?php

use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MascotaController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\CheckFavorito;
use App\Http\Middleware\CheckGeneroMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users/mujeres', [ApiUserController::class, 'getFemaleUsersApi']);


Route::get('mascotas/index', [MascotaController::class, 'index'])->name('mascotas.index')->middleware(CheckGeneroMiddleware::class);


Route::get('favoritos/index', [FavoritoController::class, 'index'])->name('favoritos.index')->middleware(CheckFavorito::class);

Route::post('favoritos/store', [FavoritoController::class, 'store'])->name('favoritos.store')->middleware(CheckFavorito::class);

Route::delete('favoritos/{mascota}', [FavoritoController::class, 'destroy'])->name('favoritos.destroy');
Route::get('mascotas/indexInvitado', [MascotaController::class, 'indexInvitado'])->name('mascotas.indexInvitado');
Route::post('guest/store', [GuestController::class,'store'])->name('guest.store');
