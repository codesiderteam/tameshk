<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryContract;

use App\Models\User;

class UserRepository implements UserRepositoryContract
{

    public function registerOrLogin(string $mobile): array
    {
        $user = User::where("mobile", $mobile)->first();

        if (is_null($user)) {
            // store user and create new token
            return $this->storeUserData($mobile);
        }

        // user exist referesh token and delete perviuos tokens
        return $this->updateUserData($user);
    }

    public function storeUserData(string $newUserMobile): array
    {
        $newUser = User::create([
            "mobile" => $newUserMobile
        ]);

        $newUser->createToken('accessToken');
        $token = $newUser->plainTextToken;

        $payload = [
            "user" => $newUser,
            "token" => $token
        ];

        return $payload;
    }

    public function updateUserData(User $user): array
    {
        // delete perviuos user tokens
        $user->tokens()->delete();

        // create new token
        $token = $user->createToken("access_token")->plainTextToken;

        $payload = [
            "user" => $user,
            "token" => $token
        ];

        return $payload;
    }
}
