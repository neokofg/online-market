<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

final class AuthService
{
    public function login($credentials)
    {
        if(Auth::attempt())
        {

        }
    }
}
