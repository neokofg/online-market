<?php

namespace App\Repository;

use App\Contracts\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->login = $request->input('login');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return $user;
    }
    public function login(Request $request)
    {
        $credentials = $request->all();
        $user = 
    }
}
