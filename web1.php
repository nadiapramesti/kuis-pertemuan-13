<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('Nadia')->group(function () {
	Route::get('/Nad', function () {
    return view('welcome');
	});

	Route::get('/Latihan 1', function () {
    echo "kuis Latihan pertemuan 13";
    echo '<p>memahami route pada laravel</p>';
	});

	Route::redirect('/contact-us', '/Nad');
});

Route::fallback( function () {
    return "Not Found";
	});
