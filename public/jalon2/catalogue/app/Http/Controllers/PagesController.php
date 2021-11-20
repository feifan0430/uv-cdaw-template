<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Lavarel controlleur

class PagesController extends Controller
{
    public function index () {
        return view('index');
    }

    public function explore () {
        return view('explore');
    }

    public function signin () {
        return view('signin');
    }

    public function signup () {
        return view('signup');
    }
}
