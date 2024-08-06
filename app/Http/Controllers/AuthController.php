<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $validator = validator(
            $request->all(),
            [
                'email' => ['required' , 'email' , 'string'],
                'password' => ['required' , 'string' ],
            ]
            );

            if($validator->fails()){
                return response()->json(['error' => $validator->errors()], 422);
            }
            $credentials = $request->only(['email' , 'password']);
            $token = auth()->attempt($credentials);
            if (!$token) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => auth() -> user(),
                'expires_in' => env('JWT_TTL') * 60 . 'seconds'
            ]);
    }

    public function logout(){
        auth()->logout();
        return response()->json(['message' => 'Déconnecté avec succès']);
    }

    public function refresh(){
        $token = auth()->refresh();
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => auth() -> user(),
            'expires_in' => env('JWT_TTL') * 60 . 'seconds'
            ]);
    }
}
