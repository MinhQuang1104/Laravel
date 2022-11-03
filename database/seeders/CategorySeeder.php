<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Head phone',
            'quantity' => '2'
        ]);

        DB::table('categories')->insert([
            'name' => 'Watch',
            'quantity' => '2'
        ]);
    }
}
