<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $departments = [
            ['id' => 1, 'name' => 'Bilgisayar Teknolojileri'],
            ['id' => 2, 'name' => 'Makine'],
            ['id' => 3, 'name' => 'Tasarım'],
            ['id' => 4, 'name' => 'Tekstil'],
            ['id' => 5, 'name' => 'Gıda'],
        ];

        return view('pages.bize-ulasin', compact('departments'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
        ]);

        // Burada veritabanına kayıt ekleyeceğiz
        return back()
            ->with('success', 'Mesajınız başarıyla gönderilmiştir.');
    }
}
