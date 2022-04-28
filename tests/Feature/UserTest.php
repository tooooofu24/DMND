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

    public function testUpdate()
    {
        $response = $this->withToken(env('BEARER_TOKEN'))
            ->patch(
                route('api.users.update', 1),
                []
            );

        $response->assertOk();
    }

    public function testDestroy()
    {
        $response = $this->withToken(env('BEARER_TOKEN'))->delete(route('api.users.destroy', 1));

        $response->assertOk();
    }
}
