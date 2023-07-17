<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerFile extends Controller
{
    public function showUser(){
        return view('welcome');
    }
    public function postFile(){
        return view('post');
    }
    public function aboutFile(){
        return view('About');
    }
}
