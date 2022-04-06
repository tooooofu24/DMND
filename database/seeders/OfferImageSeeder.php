<?php

namespace Database\Seeders;

use App\Models\OfferImage;
use Illuminate\Database\Seeder;

class OfferImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfferImage::factory()->count(\App\Consts\Seed::OFFERIMAGECOUNT)->create();
    }
}
