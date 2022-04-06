<?php

namespace App\UseCases\Offer\Recomended;

use App\Http\Resources\OfferResource;
use App\Models\Offer;
use Illuminate\Http\Request;

class IndexAction
{
    public function __invoke(Request $request)
    {
        $query = Offer::query()
            ->with(['buyer', 'seller', 'category.baseCategory', 'images'])
            ->withCount(['favorites'])
            ->inRandomOrder();

        $limit = $request->input('limit', 20);

        return OfferResource::collection($query->paginate($limit));
    }
}
