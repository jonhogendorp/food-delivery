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
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            UserSeeder::class,
            Food_typeSeeder::class,
            Restaurant_typeSeeder::class,
            IngredientSeeder::class,
            AreaSeeder::class,
            TimeSeeder::class,

            OpeningHourSeeder::class,
            OrderSeeder::class,
            RestaurantSeeder::class,
            Area_restaurantSeeder::class,
            ProductSeeder::class,




            ]);
    }
}
