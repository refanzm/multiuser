<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('Artikel.index');
    }

    public function create()
    {
        return view('Artikel.create');
    }
}
