<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {
        $this->validateLogin($request);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return response()->json([
                'token'   => $user->createToken($request->name)->plainTextToken,
                'message' => 'User login successfully'
            ]);
        }

        return response()->json([
            'message' => 'Unauthorized',
        ], 401);
    }

    public function validateLogin(Request $request) {
        return $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
            'name'     => 'required',
        ]);
    }
}
