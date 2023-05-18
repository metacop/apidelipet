<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class AuthController extends Controller
{
    public function registro(Request $request)
    {
        $validarData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validarData['name'],
            'last_name' => $validarData['last_name'],
            'email' => $validarData['email'],
            'password' => Hash::make($validarData['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ],200);
    }

    public function login(Request $request){
        if(!Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'mensaje' => 'Credenciales invalidas'
            ], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();
     

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
           'name' => $user->name,
            'id' => $user->id
        ]);
    }

    public function userinfo(Request $request)
    {
        return $request->user();
    }

}
