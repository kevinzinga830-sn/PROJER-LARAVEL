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

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blank', function () {
    return view('blank');
});