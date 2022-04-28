<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageTest extends TestCase
{
    public function testIndex()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))
            ->get(route('api.messages.index', ['talk_room_id' => 1]));

        // レスポンスの検証
        $response->assertOk();
    }
}
