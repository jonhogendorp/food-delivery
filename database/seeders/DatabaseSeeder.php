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
            UserSeeder::class,
            Food_typeSeeder::class,
            Restaurant_typesSeeder::class,
            RestaurantsSeeder::class,
            ProductsSeeder::class,
            IngredientsSeeder::class,
            OrdersSeeder::class,
            ]);
    }
}
