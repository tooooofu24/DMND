<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BaseCategoryController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\RecomendedOfferController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\FavoriteOfferController;
use App\Http\Controllers\Api\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['as' => 'api.'], function () {
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('register', [AuthController::class, 'register']);
    Route::middleware('auth:sanctum')->group(function () {

        // User
        Route::apiResource('users', UserController::class);

        // Offer
        Route::get('offers/recomended', RecomendedOfferController::class);
        Route::get('offers/favorite', FavoriteOfferController::class);
        Route::apiResource('offers', OfferController::class);

        // Favorite
        Route::apiResource('favorites', FavoriteController::class);

        // Message
        Route::apiResource('messages', MessageController::class);

        // Category, BaseCategory
        Route::apiResource('categories', CategoryController::class);
        Route::apiResource('base-categories', BaseCategoryController::class);
    });
});
