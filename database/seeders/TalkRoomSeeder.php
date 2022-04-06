<?php

namespace Database\Seeders;

use App\Models\TalkRoom;
use Illuminate\Database\Seeder;

class TalkRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TalkRoom::factory()->count(\App\Consts\Seed::TALKROOMCOUNT)->create();
    }
}
