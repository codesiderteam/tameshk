<?php

namespace App\Http\Repositories;

use App\Http\Traits\Role;
use App\User;

class UserRepository
{
    use Role;

    public function create($data)
    {
        return User::create([
            'phone' => $data->phone,
            'role_id' => $this->role('user')->id,
        ]);
    }

    public function exist($data)
    {
        return User::where('phone', $data->phone)->first();
    }

    public function complete($data)
    {
        $user = auth()->user();
        return $user->update([
            'name' => $data->name,
            'email' => $data->email,
            'password' => $data->password,
            'city_id' => $data->city_id,
            'state_id' => $data->state_id,
            'is_active' => true,
            'is_register_completed' => true,
        ]);
    }
}
