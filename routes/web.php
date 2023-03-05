<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/login/submit', function () {
    return Request::all();
})->name('login-submit');

Route::post('/signup/submit', function () {
    return Request::all();
})->name('signup-submit');

?>
