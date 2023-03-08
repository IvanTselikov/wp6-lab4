<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('/register-step2', [
    App\Http\Controllers\Auth\RegisterStep2Controller::class,
    'showForm'
]);

Route::post('/register-step2', [
    App\Http\Controllers\Auth\RegisterStep2Controller::class,
    'postForm'
])->name('register.step2');

Auth::routes();