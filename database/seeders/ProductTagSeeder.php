<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('product_tag')->count() == 0) {
            DB::table('product_tag')->insert([
                'product_id' => '1',
                'tag_id' => '1'
            ]);

            DB::table('product_tag')->insert([
                'product_id' => '1',
                'tag_id' => '3'
            ]);
        }
    }
}
