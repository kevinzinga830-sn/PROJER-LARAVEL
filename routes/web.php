<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/charts', function () {
    return view('charts');
});