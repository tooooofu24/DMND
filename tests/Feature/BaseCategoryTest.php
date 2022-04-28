<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BaseCategoryTest extends TestCase
{

    public function testIndex()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))->get(route('api.base-categories.index'));

        // レスポンスの検証
        $response->assertOk();
    }

    public function testShow()
    {
        // リクエスト
        $response = $this->withToken(env('BEARER_TOKEN'))->get(route('api.base-categories.show', 1));

        // レスポンスの検証
        $response->assertOk();
    }
}
