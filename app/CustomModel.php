<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class CustomModel extends Model
{
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
