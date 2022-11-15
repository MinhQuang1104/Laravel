<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            DiscountTypeSeeder::class,
            ProductSeeder::class,
            TagSeeder::class,
            ProductTagSeeder::class,
            WishListSeeder::class,
            ColorSeeder::class,
            SizeSeeder::class,
            GeneralInfoSeeder::class,
            ImageSeeder::class
        ]);
    }
}
