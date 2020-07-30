<?php

namespace App\Contracts\Repositories;

use App\Models\User;

interface UserRepositoryContract
{
    public function registerOrLogin(string $mobile): array;
    public function storeUserData(string $newUserMobile): array;
    public function updateUserData(User $user): array;
}
