<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->exist($request);

        if($user){
            if(Hash::check($user->password, $request->password)){
                $accessToken = $user->createToken('authToken')->accessToken;
                return response()->json(['user' => new UserResource($user), 'access_token' => $accessToken]);
            }

            return response()->json(['error' => "password is wrong."], 422);
        }
        return response()->json(['error' => "User dose not exists"], 404);
    }
}
