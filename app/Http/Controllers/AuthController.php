<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    use ApiResponses;

    public function login(LoginRequest $request): JsonResponse
    {
        return $this->ok($request->get('email'));
    }

    public function register(): JsonResponse
    {
        return $this->ok('register');
    }
}
