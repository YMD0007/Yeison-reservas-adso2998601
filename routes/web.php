<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\doscontroller;
use App\http\Controllers\Primercontroller;
use App\http\Controllers\Reservascontroller;


Route::get('/', function () {
    return view('home');
});


Route::resource('primer', Primercontroller::class);
Route::resource('dos', doscontroller::class);
Route::resource('reservas', Reservascontroller::class);