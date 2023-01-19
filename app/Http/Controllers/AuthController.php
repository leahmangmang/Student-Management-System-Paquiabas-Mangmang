<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{public function login(Request $request)
    {

    $validateData = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);
    $user = User::where('email', $validateData['email'])->first();

    if ($user && Hash::check($validateData['password'], $user->password)) {
        $token = $user->CreateToken('api', ['create']);
        return [
            'token' => $token->plainTextToken,
        ];
    } else {
        return [
            'error' => 'Invalid Credentials',
        ];
    }

}
}
