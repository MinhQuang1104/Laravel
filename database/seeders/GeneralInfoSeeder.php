<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('general_info')->count() == 0) {
            DB::table('general_info')->insert([
                'product_id' => '1',
                'color_id' => '1',
                'size_id' => '3',
                'quantity' => '10',
                'price' => '1.799'
            ]);
            DB::table('general_info')->insert([
                'product_id' => '1',
                'color_id' => '2',
                'size_id' => '1',
                'quantity' => '7',
                'price' => '1.899'
            ]);
            DB::table('general_info')->insert([
                'product_id' => '1',
                'color_id' => '3',
                'size_id' => '2',
                'quantity' => '5',
                'price' => '1.999'
            ]);
        }
    }
}
