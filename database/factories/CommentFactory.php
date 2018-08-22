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

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
    	'title'=> $faker->title,
    	'content' => $faker->name,
        'post_id'  => function () {
            return factory(App\Post::class)->create()->id;
        },
        'product_id' => function () {
            return factory(App\Product::class)->create()->id;
        },
        'user_id' =>function () {
            return factory(App\User::class)->create()->id;
        },
       'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
