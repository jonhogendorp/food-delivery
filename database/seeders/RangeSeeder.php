<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('range')->insert([
            'postal_code' => '9701',
        ]);
        DB::table('range')->insert([
            'postal_code' => '9702',
            ]);
        DB::table('range')->insert([
            'postal_code' => '1703',
        ]);
    }
    
}
