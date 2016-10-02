<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(ProductTableSeeder::class);
    }

}

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        \App\Product::truncate();

        factory(\App\Product::class, 20)->create();
    }

}

