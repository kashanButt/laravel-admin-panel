<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'admin.dashboard.index', ['user' => 'admin']);

Route::fallback(function () {
    return view('404');
});