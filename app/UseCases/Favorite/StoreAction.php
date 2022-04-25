<?php

namespace App\UseCases\Favorite;

use App\Http\Requests\Favorite\StoreRequest;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class StoreAction
{
    public function __invoke(StoreRequest $request)
    {
        $favorite = new Favorite();
        $favorite->fill([
            'offer_id' => $request->offer_id,
            'user_id' => Auth::id(),
        ])->save();
        return $favorite;
    }
}
