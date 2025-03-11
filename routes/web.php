<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/privacy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
