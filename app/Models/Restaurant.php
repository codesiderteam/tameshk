<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'restaurants';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        "name", 'location', "type", 'image', 'link', 'typeItem',
        'brand_name', "email", "mobile"
    ];
}
