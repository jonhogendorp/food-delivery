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
            IngredientsSeeder::class,
            AreaSeeder::class,
            OpeningHoursSeeder::class,   
            ProductsSeeder::class,
            OrdersSeeder::class,
            RestaurantsSeeder::class,
            Area_restaurantSeeder::class
            ]);
    }
}
