<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('colors')->count() == 0) {
            DB::table('colors')->insert([
                'name' => 'Red',
                'color' => '#FF0000'
            ]);
            DB::table('colors')->insert([
                'name' => 'Green',
                'color' => '#00FF00'
            ]);
            DB::table('colors')->insert([
                'name' => 'Blue',
                'color' => '#0000FF'
            ]);
        }
    }
}
