<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\OrderDetail::class, function (Faker $faker) {
    return [
        'sub_price' => $faker->buildingNumber,
        'product_id' => function () {
            return factory(App\Product::class)->create()->id;
        },
        'order_id' =>function () {
            return factory(App\OrderDetail::class)->create()->id;
        },
        'created_at' => new DateTime,
        'updated_at' => new DateTime,     
    ];
});
