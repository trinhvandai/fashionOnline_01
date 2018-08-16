<?php

use Illuminate\Database\Seeder;

class CategoryPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CategoryPost::class, 10)->create();
    }
}
