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

$factory->define(App\Order::class, function (Faker $faker) {
    return [
    	'name' => $faker->name,
       'order_status' => $faker->title,
        'payment' => $faker->paragraph,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'total'=> $faker->buildingNumber,
        'image_url' => $faker->image,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
