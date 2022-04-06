<?php

namespace App\UseCases\Offer\Favorite;

use App\Http\Requests\Offer\Favorite\IndexRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;

class IndexAction
{
    public function __invoke(IndexRequest $request)
    {
        $query = Offer::query()
            ->with(['buyer', 'seller', 'category.baseCategory', 'images', 'favorites'])
            ->withCount(['favorites']);

        // userがいいねした投稿で絞り込み
        $query = $query->whereHas('favorites', function ($query) use ($request) {
            $query->where('user_id', $request->user_id);
        });

        $limit = $request->input('limit', 20);

        return OfferResource::collection($query->paginate($limit));
    }
}
