<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/login/submit', [LoginController::class, 'submit'])->name('login-submit');

Route::post('/signup/submit', function () {
    return Request::all();
})->name('signup-submit');

?>
