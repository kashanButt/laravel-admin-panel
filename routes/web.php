<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.dashboard.login');
});
Route::fallback(function () {
    return view('404');
});
