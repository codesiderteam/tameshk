<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'city' => $this->city ? $this->city->name : null,
            'state' => $this->state ? $this->state->name : null,
            'wallet' => $this->wallet,
            'email' => $this->email,
            'role' => $this->role ? $this->role->title : null,
            'email_verified_at' => $this->email_verified_at,
            'phone_verified_at' => $this->phone_verified_at,
            'is_active' => $this->is_active,
            'is_register_completed' => $this->is_register_completed,
        ];
    }
}
