<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lcobucci\JWT\Parser;

use App\User;
use App\Profile;
use Hash;

class AuthenticationController extends Controller
{
    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->validateForPassportPasswordGrant($request->password) == $user->password) {
                $token = $user->createToken("Laravel Password Grant Client")->accessToken;
                $profile = Profile::where("user_id", $user->id)->get();
                $user->profile = $profile;
                $response = [
                    'data' => [
                        'token' => $token, 
                        'user' => $user,
                        ],
                    ];
                return response($response, 200);
            } else {
                $response = 'Password mismatch';
                return response($response, 422);
            }
        } else {
            $response = 'User doesn\'t exist';
            return response($response, 422);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete(); 

        $response = 'You have been successfully logged out!';
        return response($response, 200);
    }

    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:8'
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            $token = $user->createToken('Token has been created')->accessToken;
            

            $response = [
                'data' => [
                    'token' => $token, 
                    'user' => $user,
                    ],
                ];
            return response($response, 200);
    }
}