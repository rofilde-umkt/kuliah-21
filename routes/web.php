<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("home");
});

Route::get('/saya', function() {
    return view("biodata");
});


Route::get('/about', function () {
    return view("biodata");
});
