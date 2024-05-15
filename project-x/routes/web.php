<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::post('/register', function () {
   // return view('home');
   return 'thank you' ;
});
Route::post('/login', function () {
    
    return 'logged in' ;
 });

