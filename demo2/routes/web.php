<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/users', function () {
    $names = [
        ['name' => "Ram kumar", 'email' => "ram@gmail.com", 'phone' => "8757312885"],
        ['name' => "Poojs", 'email' => "poojs@gmail.com", 'phone' => "8757301452"],
        ['name' => "Sanchit", 'email' => "sanchit@gmail.com", 'phone' => "32803200342"],
        ['name' => "Raghav", 'email' => "raghav@gmail.com", 'phone' => "8757312885"],
    ];
    return view('users', ['user' => $names]);
});


// Route::get('/users', function () {
//     // $name = "Ram kumar maniyari";
//     // return view('users',['user' => $name, "city" => "Noida"]);

//     return view();

// )}
