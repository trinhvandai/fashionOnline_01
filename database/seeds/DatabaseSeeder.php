<?php

use Illuminate\Database\Seeder;
Use Illuminate\Database\Eloquent\Model;
Use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryPostsTableSeeder::class);
        $this->call(CategoryProductsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class); 
        $this->call(OrdersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // $this->call(UsersTableSeeder::class);
        /*$faker =Faker::create();
        foreach(range(1,20)as$index){
        	DB::table('users')->insert([
             'name'=>$faker->name,
             'email'=>$faker->email,
             'password'=>bcrypt('secret'),
             'address'=>$faker->address,
             'phone'=>$faker->phone,
             'role'=>$faker->role,
        	]);
        	DB::table('products')->insert([
        				
                'name'=>$faker->name,		
                'title'=>$faker->title,			
                'description'=>$faker->description,			
                'price'=>$faker->price,
                'status'=>$faker->status,		
                //brand_id			
                //image_url	varchar(191)			
                'created_at'=>$faker->created_at,
        	]);
        	DB::table('brands')->insert([
              'name'=>$faker->name,
              'create_at'=>$faker->create_at,
        	]);
        }*/
    }
}
