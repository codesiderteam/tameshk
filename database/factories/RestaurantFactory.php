<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        "name" => '',
        'brand_name' => '',
        'brand_name_en' => '',
        'location' => '',
        "type" => '',
        "type_en" => '',
        "type_item" => '',
        "type_item_en" => '',
        'logo' => '',
        'link' => '',
        "email" => '',
        "mobile" => '',
        "description" => '',
    ];
});
