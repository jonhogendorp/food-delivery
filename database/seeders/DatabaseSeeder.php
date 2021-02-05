<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Food_typesSeeder::class,
            IngredientsSeeder::class,
            OrdersSeeder::class,
            ProductsSeeder::class,
            RestaurantSeeder::class,
            UserSeeder::class,

            ]);
    }
}
