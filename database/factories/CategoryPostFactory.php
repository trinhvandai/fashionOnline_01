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

$factory->define(App\CategoryPost::class, function (Faker $faker) {
    return [
        'category_id'  => function () {
            return factory(App\Category::class)->create()->id;
        },
        'post_id' => function () {
            return factory(App\Post::class)->create()->id;
        },
        'created_at' => new DateTime,
        'updated_at' => new DateTime,    
    ];
});
