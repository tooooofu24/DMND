<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\Favorite\IndexRequest;
use App\UseCases\Offer\Favorite\IndexAction;
use Illuminate\Http\Request;

class FavoriteOfferController extends Controller
{
    public function __invoke(IndexRequest $request, IndexAction $action)
    {
        $response = $action($request);
        return $response;
    }
}
