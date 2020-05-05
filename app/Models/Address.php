<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id', 'address', 'location'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
