<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('discount_types')->count() == 0) {
            DB::table('discount_types')->insert([
                'type_name' => '%'
            ]);
        }
    }
}
