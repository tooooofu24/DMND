<?php

namespace Database\Seeders;

use App\Models\BaseCategory;
use Illuminate\Database\Seeder;

class BaseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'メンズファッション', 'レディースファッション', '本・音楽・ゲーム', 'オモチャ・ホビー', 'ハンドメイド', 'チケット', 'その他'
        ];
        foreach ($categories as $category) {
            $baseCategory = new BaseCategory();
            $baseCategory->name = $category;
            $baseCategory->save();
        }
    }
}
