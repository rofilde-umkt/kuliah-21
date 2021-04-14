<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;



Route::get('/', function () {
    return view("home");
})->name("homepage");

Route::get('/saya', function() {
    return view("biodata");
});


Route::get('/about', function () {
    return view("biodata");
});

// Contoh Menghubungkan antara router dan controller


Route::get("/hello", [ExampleController::class, "hello"])->name("hello") ;
Route::get("/hii/{nama}", [ExampleController::class, "hii"])->name("hii");
Route::get("/apa-kabar/{gelar}/{nama}", [ExampleController::class, "apaKabar"])->name("apakabar");
