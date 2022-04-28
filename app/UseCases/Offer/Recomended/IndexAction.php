<?php

namespace App\UseCases\Offer\Recomended;

use App\Http\Requests\Offer\Recomended\IndexRequest;
use App\Http\Resources\OfferCollection;
use App\Http\Resources\OfferResource;
use App\Models\Offer;

class IndexAction
{
    public function __invoke(IndexRequest $request)
    {
        $query = Offer::WithAllRelations()
            ->inRandomOrder();

        $limit = $request->input('limit', 20);

        return new OfferCollection($query->paginate($limit));
    }
}
