<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //el metodo __invoke es para administrar una unica ruta
    public function __invoke (){
        // return view ('welcome');
        return view('home');
    }
}
