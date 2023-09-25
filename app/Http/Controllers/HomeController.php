<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('frontend.home.home');
    }

    public function create() {
        return view('frontend.create.create');
    }
}
