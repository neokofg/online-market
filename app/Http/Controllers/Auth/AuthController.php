<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Repository\UserRepository;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AuthController extends Controller
{
    /**
     * @param StoreUserRequest $request
     * @param UserRepository $userRepository
     */
    public function store(StoreUserRequest $request, UserRepository $userRepository)
    {
        try {
            $userRepository->store($request);
            return to_route('index');
        } catch (\Exception $e) {
            throw new BadRequestHttpException('Произошла ошибка!'. $e);
        }
    }
    public function login(LoginUserRequest $request)
    {

    }
}
