<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('page')->group(function () {

    Route::get('/ram', function () {
        return view('pages.about');
    })->name("aboutpage");

    Route::get('/shyam', function (string $id = null) {
        return view("pages.post");
    })->name('postpage');

    Route::get("/sssss", function () {
        return view("pages.gallery");
    })->name("gallery");
});
