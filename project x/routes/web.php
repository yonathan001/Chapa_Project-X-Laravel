<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
  

Route::get('/burgers', function () {
    return view('burgers',['type'=> 'humburger']);
});
  