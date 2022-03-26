<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $token = User::first()->createToken('develop');
        return ['token' => $token->plainTextToken];
    }

    public function login(Request $request)
    {
    }
}
