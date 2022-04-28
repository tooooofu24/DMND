<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfferTest extends TestCase
{
    public function testIndex()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))
            ->get(route('api.offers.index'));

        // レスポンスの検証
        $response->assertOk();
    }
}
