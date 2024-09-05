<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('home');
});
Route::post('/register', [usercontroller::class, 'register'] );

