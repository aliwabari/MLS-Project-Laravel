<?php

namespace App\Http\Controllers;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:25',
                'last_name' => 'required|string|max:25',
                'email' => 'required|string|max:55',
                'role' => 'required|string|max:25',
                'phone' => 'required|string|min:10|max:10',
                'password' => 'required|string|min:8',
            ]);
            $validated['password'] = Hash::make($validated['password']);

            $user = User::create([$validated]);

            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to create account, please try again.'
                ], 500);
            }


            return response()->json([
                'success' => true,
                'message' => "Account Created Successfully"
            ], 201);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'Unexpected error occurred !'], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $validated = $request->validate([
                'email' => 'required|string|max:55',
                'password' => "required|string|min:8"
            ]);

            $user = User::where('email', '=', $validated['email'])->first();


            if (!$user || Hash::check($validated['password'], $user->password)) {
                return response()->json(['success' => false, 'message' => 'Incorrect password'], 500);
            }


            return response()->json(['success' => true, 'message' => 'User Log in successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['success' => false, 'message' => 'Unexpected error occurred !'], 500);

        }
    }



}
