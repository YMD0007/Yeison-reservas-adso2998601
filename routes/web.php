<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariocontroller;
use App\http\Controllers\homecontroller;
use App\http\Controllers\Reservascontroller;


Route::get('/', function () {
    return view('home');
});


Route::resource('home', homecontroller::class);
Route::resource('usuario', usuariocontroller::class);
Route::resource('reservas', Reservascontroller::class);