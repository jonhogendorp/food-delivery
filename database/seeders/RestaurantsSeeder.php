<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'restaurant_name' => 'Hungry Hippo',
            'restaurant_types_id' => 1,
            'email' => 'hungry@hippo.nl',
            'street' => 'Dorpstraat',
            'house_number' => 2,
            'house_number_addition' => 'A1',
            'postal_code' => '9701AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);

        DB::table('restaurants')->insert([
            'restaurant_name' => 'International house of Stampot',
            'email' => 'iho@stamppot.nl',
            'street' => 'Dorpstraat',
            'house_number' => 4,
            'house_number_addition' => 'B1',
            'postal_code' => '9702AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);

        DB::table('restaurants')->insert([
            'restaurant_name' => 'Finding Nemo fish & chips',
            'email' => 'finding@nemo.nl',
            'street' => 'Dorpstraat',
            'house_number' => 6,
            'house_number_addition' => 'C1',
            'postal_code' => '1703AA',
            'city' => 'Groningen',
            'phone' => '0612345687',

        ]);
    }
}
