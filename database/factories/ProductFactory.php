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

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title'=>$faker->title,
        'description'=>$faker->name,
         'price'=>$faker->buildingNumber,
      'brand_id' =>function () {
            return factory(App\Brand::class)->create()->id;
        },
     'image_url' => $faker->randomElement(['images/blog/product1.jpg' ,'images/blog/product2.jpg', 'images/blog/product3.jpg', 'images/blog/product4.jpg', 'images/blog/product5.jpg' ,'images/blog/product6.jpg'])
    ];
});
