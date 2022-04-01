<?php

namespace App\UseCases\Offer;

use App\Http\Requests\Offer\IndexRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;

class IndexAction
{
    public function __invoke(IndexRequest $request)
    {
        $query = Offer::query()
            ->with(['buyer', 'seller', 'category.baseCategory', 'images'])
            ->withCount(['favorites']);

        // 文字列検索
        if ($request->q) {
            $query = $query->where('title', 'like', "%{$request->q}%");
        }

        // カテゴリー検索
        if ($request->category_id_list) {
            foreach ($request->category_id_list as $category_id) {
                $query = $query->where('category_id', $category_id);
            }
        }

        // 公開中検索
        if ($request->is_open) {
            $query = $query->where('status', 0);
        }

        // 商品の状態検索
        if ($request->condition) {
            $query = $query->where('condition', $request->condition);
        }

        return OfferResource::collection($query->paginate());
    }
}
