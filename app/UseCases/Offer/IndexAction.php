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

        return OfferResource::collection($query->paginate());
    }
}
