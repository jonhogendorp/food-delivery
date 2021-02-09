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
            UserSeeder::class,
            RangeSeeder::class,
            OpeningHoursSeeder::class,
            Restaurant_typesSeeder::class,
            ProductsSeeder::class,
            OrdersSeeder::class,
            RestaurantSeeder::class,

            ]);
    }
}
