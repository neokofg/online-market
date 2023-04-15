<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function store(Request $request);
    public function login(Request $request);
}
