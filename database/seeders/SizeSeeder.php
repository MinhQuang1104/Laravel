<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('sizes')->count() == 0) {
            DB::table('sizes')->insert([
                'size' => 'S',
                'name' => 'Small'
            ]);
            DB::table('sizes')->insert([
                'size' => 'M',
                'name' => 'Medium'
            ]);
            DB::table('sizes')->insert([
                'size' => 'L',
                'name' => 'Large'
            ]);
            DB::table('sizes')->insert([
                'size' => 'XL',
                'name' => 'Xtra-Large'
            ]);
        }
    }
}
