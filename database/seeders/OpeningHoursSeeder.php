<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class OpeningHoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opening_hours')->insert([
         
            'Start' => '16:00:00',
            'Stop' => '03:00:00',
        ]);
        DB::table('opening_hours')->insert([
         
            'Start' => '14:00:00',
            'Stop' => '02:00:00',
        ]);
        DB::table('opening_hours')->insert([
         
            'Start' => '10:00:00',
            'Stop' => '23:00:00',
        ]);
    }
       
}
