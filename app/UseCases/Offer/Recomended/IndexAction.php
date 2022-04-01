<?php

namespace App\UseCases\Offer\Recomended;

use App\Http\Resources\OfferResource;
use App\Models\Offer;

class IndexAction
{
    public function __invoke()
    {
        $query = Offer::query()
            ->with(['buyer', 'seller', 'category.baseCategory', 'images'])
            ->withCount(['favorites'])
            ->inRandomOrder();

        return OfferResource::collection($query->paginate());
    }
}
