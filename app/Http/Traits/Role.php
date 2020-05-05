<?php

namespace App\Http\Traits;

use App\Models\Role as ModelsRole;

/**
 *
 */
trait Role
{
    public function role($title)
    {
        return ModelsRole::where('title', $title)->first();
    }
}
