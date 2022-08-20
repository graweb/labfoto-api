<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response(['message' => 'Bad creds'], 401);
        }

        if ($user->tokenCan('server:update')) {
            $token = $user()->currentAccessToken();
        }

        $token = $user->createToken(config('app.name'), ['server:update'])->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }

    protected function checkToken(Request $request)
    {
        $checkToken = PersonalAccessToken::findToken($request->token);
        if (is_null($checkToken)) {
            return response(['message' => 'Token expirado'], 401);
        }

        return $checkToken->tokenable;
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ['message' => 'Deslogado com sucesso'];
    }
}
