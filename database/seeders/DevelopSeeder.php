<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevelopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_access_tokens')->insert(
            array('id' => '1', 'tokenable_type' => 'App\\Models\\User', 'tokenable_id' => '1', 'name' => 'develop', 'token' => '67923fdf7611a92099e2e0d14b07cd1ddba8b5100d5b897caa40b5532fa71288', 'abilities' => '["*"]', 'last_used_at' => NULL, 'created_at' => '2022-03-12 06:25:52', 'updated_at' => '2022-03-12 06:25:52')
        );
    }
}
