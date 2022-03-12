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
        $this->call([
            DevelopSeeder::class,
            BaseCategorySeeder::class,
            CategorySeeder::class,
            OfferImageSeeder::class,
            OfferSeeder::class,
            UserCategorySeeder::class,
            UserSeeder::class,
            FavoriteSeeder::class,
        ]);
    }
}
