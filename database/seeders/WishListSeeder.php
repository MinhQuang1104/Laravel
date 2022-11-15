<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('wish_list')->count() == 0) {
            DB::table('wish_list')->insert([
                'product_id' => '1',
                'status' => 'In stock'
            ]);
        }
    }
}
