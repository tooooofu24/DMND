<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    public function testIndex()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))->get(route('api.categories.index'));

        // レスポンスの検証
        $response->assertOk();
    }

    public function testShow()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))->get(route('api.categories.show', 1));

        // レスポンスの検証
        $response->assertOk();
    }
}
