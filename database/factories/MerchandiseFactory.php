<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Merchandise;
use Faker\Generator as Faker;

$factory->define(Merchandise::class, function (Faker $faker) {
    return [
        'brand_name'=>$this->faker->word,
        'product_name'=>$this->faker->word,
        'category_id'=> rand(1, 5),
        'retail_price'=> rand(1, 999),
        'wholesale_price'=> rand(1, 10000),
        'unit_id'=> rand(1, 5),
        'wholesale_qty'=> rand(0, 1000),
        'qty_stock'=> rand(0, 999),
    ];
});
