<?php

namespace App\Contracts\Repositories;

interface UserRepositoryContract
{
    public function isUserRegistered(string $data): bool;
    public function storeUserData(array $data): array;
    public function updateUserData(array $data): array;
}
