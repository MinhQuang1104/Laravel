<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('tags')->count() == 0) {
            DB::table('tags')->insert([
                'name' => 'Clothes'
            ]);

            DB::table('tags')->insert([
                'name' => 'Sweater'
            ]);

            DB::table('tags')->insert([
                'name' => 'Footwear'
            ]);
        }
    }
}
