<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showUser(string $id){
        return view('user',compact('id'));
    }

    public function showHome(){
        return view('welcome');
    }
}
