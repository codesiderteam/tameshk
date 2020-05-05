<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepository;
use App\Http\Requests\RegisterCompleteRequest;
use App\Http\Requests\RegisterPhoneRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(RegisterPhoneRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->exist($request);
        if($user){
            $accessToken = $user->createToken('authToken')->accessToken;
            return response()->json(['user' => new UserResource($user), 'access_token' => $accessToken]);
        }
        $user = $userRepository->create($request);
        $accessToken = $user->createToken('authToken')->accessToken;
        return response()->json(['user' => new UserResource($user), 'access_token' => $accessToken]);
    }

    public function complete(RegisterCompleteRequest $request, UserRepository $userRepository)
    {
        $user = $userRepository->complete($request);
        if($user){
            return response()->json([ 'user' => new UserResource(auth()->user())]);
        }
        return response()->json([ 'user' => $user]);
    }
}
