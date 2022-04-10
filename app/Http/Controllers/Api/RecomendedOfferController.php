<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Offer\Recomended\IndexRequest;
use App\UseCases\Offer\Recomended\IndexAction;

class RecomendedOfferController extends Controller
{
    public function __invoke(IndexRequest $request, IndexAction $action)
    {
        $response = $action($request);
        return $response;
    }
}
