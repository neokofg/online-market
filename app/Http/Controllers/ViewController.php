<?php

namespace App\Http\Controllers;

class ViewController extends Controller
{
    public function registerView()
    {
        return view('register');
    }

    public function loginUser()
    {
        return view('login');
    }
}
