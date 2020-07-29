<?php

namespace App\Contracts\Strategies;

interface AuthStrategy
{
    public function authUser(array $data): array;
}
