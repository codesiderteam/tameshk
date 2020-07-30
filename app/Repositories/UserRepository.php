<?php

namespace App\Repositories;

use App\Contracts\Repositories\UserRepositoryContract;

use App\Models\User;

class UserRepository implements UserRepositoryContract
{
    /**
     * check user exist and registerd if false
     * true update only token
     *
     * @param string $mobile
     * @return array user data
     */
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

    /**
     * store new user with mobile
     * create new token
     *
     * @param string $mobile
     * @return array user data
     */
    public function storeUserData(string $newUserMobile): array
    {
        $newUser = User::create([
            "mobile" => $newUserMobile
        ]);

        $token = $newUser->createToken('access_token')->plainTextToken;

        $payload = [
            "user" => $newUser,
            "token" => $token
        ];

        return $payload;
    }

    /**
     * Update user token and
     * delete old tokens
     *
     * @param string $mobile
     * @return array user data
     */
    public function updateUserData(User $user): array
    {
        // delete perviuos user tokens
        $user->tokens()->delete();

        // create new token
        $token = $user->createToken("access_token")->plainTextToken;

        $payload = [
            "user" => $user,
            "token" => $token,
        ];

        return $payload;
    }
}
