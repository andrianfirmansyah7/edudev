<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function tentang(){
        return view('katalog');
    }

    public function katalog(){
        return view('katalog');
    }

}
