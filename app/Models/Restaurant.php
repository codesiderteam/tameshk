<?php

namespace App\Models;

use App\CustomModel;

class Restaurant extends CustomModel
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
        "name",
        'brand_name',
        'brand_name_en',
        'location',
        "type",
        "type_item",
        'logo',
        'link',
        "email",
        "mobile",
        "description"
    ];
}
