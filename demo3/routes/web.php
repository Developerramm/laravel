<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[pageController::class,'showHome'])->name('home');
Route::get('/user/{id}',[pageController::class,'showUser'])->name('users');


