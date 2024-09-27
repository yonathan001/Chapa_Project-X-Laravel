<?php

use Illuminate\Support\Facades\Route;
use League\CommonMark\Reference\Reference;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/donate', 'App\Http\Controllers\DonationController@store')->name('donate');// the call back url
Route::get('callback/{reference}','App\Http\controllers\DonationController@callback')->name('callback');