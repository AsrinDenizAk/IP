<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $isim="Asrın";


        return view('home' , compact('isim') );
    }
}







