<?php

use App\Http\Controllers\ApiFavoritoController;
use App\Http\Controllers\ApiGuestController;
use App\Http\Controllers\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('users/mujeres', [ApiUserController::class,'getFemaleUsersApi']);
Route::get('users/favoritos/{id}', [ApiFavoritoController::class,'getFavoriteDogsApi']);
Route::get('getGuest', [ApiGuestController::class,'getGuest']);

