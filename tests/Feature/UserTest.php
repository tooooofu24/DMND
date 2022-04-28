<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function testShow()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))->get(route('api.users.show', 1));

        // レスポンスの検証
        $response->assertOk();
    }
}
