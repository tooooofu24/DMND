<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedData = [
            // base_category_id => [ name ]
            1 => ['トップス', 'ジャケット/アウター', 'パンツ',  '靴(スニーカー)', '靴(革靴, etc)', 'バッグ', '帽子', '小物/アクセサリー', '時計', 'その他'],
            2 => ['トップス', 'ジャケット/アウター', 'パンツ', 'スカート', 'ワンピース', '靴(スニーカー)', '靴(革靴, etc)', 'バッグ', '帽子', '小物/アクセサリー', '時計', 'その他'],
            3 => ['本', '漫画', '雑誌', 'CD', 'DVD/ブルーレイ', 'レコード', 'テレビゲーム（本体）', 'テレビゲーム（ソフト）', 'その他'],
            4 => ['おもちゃ', 'タレントグッズ', 'コミック/アニメグッズ', 'トレーディングカード', 'フィギュア', '楽器/機材', 'コレクション', 'ミリタリー', '美術品', 'アート用品', 'その他'],
            5 => ['アクセサリー(女性用)', 'ファッション/小物', 'アクセサリー/時計', '日用品/インテリア', '趣味/おもちゃ', 'キッズ/ベビー', '素材/材料', '二次創作物', 'その他'],
            6 => ['音楽', 'スポーツ', '演劇/芸能', 'イベント', '映画', '施設利用券', '優待券/割引券', 'その他'],
            7 => ['まとめ売り', 'ペット用品', '食品', '飲酒/酒', '日用品/生活雑貨/旅行', 'アンティーク/コレクション', '事務/店舗用品', 'その他']
        ];
        foreach ($seedData as $i => $v) {
            foreach ($v as $name) {
                $category = new Category(
                    [
                        'base_category_id' => $i,
                        'name' => $name
                    ]
                );
                $category->save();
            }
        }
        // Category::factory()->count(\App\Consts\Seed::CATEGORYCOUNT)->create();
    }
}
