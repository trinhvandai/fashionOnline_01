<?php

use Illuminate\Database\Seeder;
Use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 5)->create();
        /* $faker =Faker::create();
        foreach(range(1,20)as$index){
        	DB::table('products')->insert([
        				
                'name'=>$faker->name,		
                'title'=>$faker->catchPhrase,			
                'description'=>$faker->description,			
                'price'=>$faker->price,
                'status'=>$faker->status,		
                //brand_id			
                //image_url	varchar(191)			
                'created_at'=> $faker->dateTime($max ='now'),
        	]);
        }*/
    }
}
