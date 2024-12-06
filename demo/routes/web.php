<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/post/{id?}', function (string $id = null) {
    if ($id) {
        return "<h1>Post id is {$id} </h1>";
    } else {

        return "<h1>Post id is not available </h1>";
    }
});
