<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecomendedOfferTest extends TestCase
{
    public function testIndex()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))
            ->get(route('api.offers.recomended',));

        // レスポンスの検証
        $response->assertOk();
    }
}
