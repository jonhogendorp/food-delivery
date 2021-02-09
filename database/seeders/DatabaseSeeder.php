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
            IngredientsSeeder::class,
<<<<<<< HEAD
            ProductsSeeder::class,
            OrdersSeeder::class,
=======
            UserSeeder::class,
            RangeSeeder::class,
            OpeningHoursSeeder::class,
            Restaurant_typesSeeder::class,
            ProductsSeeder::class,
            OrdersSeeder::class,
            RestaurantSeeder::class,

>>>>>>> ac47bd85ad6efa2c0f792c80f2a56a7ef0d9f702
            ]);
    }
}
