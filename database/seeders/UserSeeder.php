<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Quang',
            'lastname' => 'Nguyễn Minh',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
