<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Restaurant_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_type')->insert([
            'name' => 'Exotic',
        ]);

        DB::table('restaurant_type')->insert([
            'name' => 'Local',
        ]);

        DB::table('restaurant_type')->insert([
            'name' => 'Sea food',
        ]);
    }
}
