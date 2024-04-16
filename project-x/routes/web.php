<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['what'=> 'Project-x', 'when'=>'starts soon!']);
});
  

