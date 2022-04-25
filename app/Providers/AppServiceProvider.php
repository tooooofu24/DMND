<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // success
        Response::macro('success', function (string $message) {
            return response()->json([
                'message' => $message,
                'exception' => null,
                'status_code' => 200,
            ]);
        });
    }
}
