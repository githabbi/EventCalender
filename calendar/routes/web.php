<?php

use Illuminate\Support\Facades\Route;




Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::get('/', function () {
    return view('Welcome');
})->name('welcome');
Route::get('/j', function () {
    return view('create-event');
});
Route::get('/k', function () {
    return view('dashboard');
});