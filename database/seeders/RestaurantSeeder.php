<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant')->insert([
            'restaurant_name' => 'hungry Hippo',
            'restaurant_types_id' => 1,
            'email' => 'hungry@hippo.nl',
            'street' => 'dorpstraat',
            'house_number' => 2,
            'house_number_addition' => 'A1',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);

        DB::table('restaurant')->insert([
            'restaurant_name' => 'International house of Stampot',
            'restaurant_types_id' => 2,
            'email' => 'iho@stamppot.nl',
            'street' => 'dorpstraat',
            'house_number' => 4,
            'house_number_addition' => 'B1',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);

        DB::table('restaurant')->insert([
            'restaurant_name' => 'Finding Nemo fish & chips',
            'restaurant_types_id' => 3,
            'email' => 'finding@nemo.nl',
            'street' => 'dorpstraat',
            'house_number' => 6,
            'house_number_addition' => 'C1',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);
    }
}
