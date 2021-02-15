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
            Restaurant_typeSeeder::class,
            IngredientSeeder::class,
            AreaSeeder::class,
            OpeningHourSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            RestaurantSeeder::class,
            Area_restaurantSeeder::class
            ]);
    }
}
