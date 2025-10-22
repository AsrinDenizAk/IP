<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hakkimizda()
    {
        return view('pages.hakkimizda');
    }

    public function bolumlerimiz()
    {
        return view('pages.bolumlerimiz');
    }

    public function bizeUlasin()
    {
        return view('pages.bize-ulasin');
    }
}
