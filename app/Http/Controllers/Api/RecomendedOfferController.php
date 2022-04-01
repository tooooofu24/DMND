<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\UseCases\Offer\Recomended\IndexAction;
use Illuminate\Http\Request;

class RecomendedOfferController extends Controller
{
    public function __invoke(IndexAction $action)
    {
        $response = $action();
        return $response;
    }
}
