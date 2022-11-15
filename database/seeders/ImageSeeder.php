<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('images')->count() == 0) {
            DB::table('images')->insert([
                'image' => 'uploads/products/prod-1.jpg',
                'product_id' => '1'
            ]);
            DB::table('images')->insert([
                'image' => 'uploads/products/prod-2.jpg',
                'product_id' => '1'
            ]);
            DB::table('images')->insert([
                'image' => 'uploads/products/prod-3.jpg',
                'product_id' => '1'
            ]);
            DB::table('images')->insert([
                'image' => 'uploads/products/prod-4.jpg',
                'product_id' => '1'
            ]);
            DB::table('images')->insert([
                'image' => 'uploads/products/prod-5.jpg',
                'product_id' => '1'
            ]);
        }
    }
}
