<?php

namespace App\UseCases\Offer\Recomended;

use App\Http\Requests\Offer\Recomended\IndexRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;

class IndexAction
{
    public function __invoke(IndexRequest $request)
    {
        $query = Offer::query()
            ->with(['buyer', 'seller', 'category.baseCategory', 'images'])
            ->withCount(['favorites'])
            ->inRandomOrder();

        $limit = $request->input('limit', 20);

        return OfferResource::collection($query->paginate($limit));
    }
}
