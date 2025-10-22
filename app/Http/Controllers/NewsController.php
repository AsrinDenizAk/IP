<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $data = file_get_contents('https://api.rss2json.com/v1/api.json?rss_url=https%3A%2F%2Fwww.aa.com.tr%2Ftr%2Frss%2Fdefault%3Fcat%3Dspor');

        $data = json_decode($data);

        $news = $data->items;

        return view('news', compact('news'));
    }
}
