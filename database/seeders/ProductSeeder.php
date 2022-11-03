<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Đồng hồ',
            'sku' => 'dh-123456',
            'weight' => '1.5 kg',
            'dimension' => '2 x 4 x 8 cm',
            'price' => '1.699',
            'old_price' => '1.999',
            'discount' => '15',
            'discount_type_id' => '1',
            'hot' => '1',
            'featured' => '0',
            'status_id' => '1',
            'category_id' => '1'
        ]);
    }
}
