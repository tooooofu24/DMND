<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('user_category')->insert([
                'user_id' => random_int(1, 20),
                'category_id' => random_int(1, 40)
            ]);
        }
    }
}
