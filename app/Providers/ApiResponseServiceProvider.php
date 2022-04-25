<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // api_meta
        Response::macro('api_meta', function () {
            return [
                "current_version" => 1,
                "latest_version" => 1
            ];
        });

        // success
        Response::macro('success', function (string $message) {
            return response()->json([
                'message' => $message,
                'status_code' => 200,
                'api_meta' => response()->api_meta(),
            ]);
        });

        // resource
        Response::macro('resource', function (string $message) {
            return [
                'status_code' => 200,
                'message' => $message,
                'api_meta' => response()->api_meta(),
            ];
        });

        // validation_error
        Response::macro('validation_error', function (\Illuminate\Contracts\Validation\Validator $validator) {
            throw new \Illuminate\Http\Exceptions\HttpResponseException(response()->json([
                'status_code' => 400,
                'message' => 'Validation Error',
                'exception' => '\Illuminate\Validation\ValidationException',
                'validation_errors' => $validator->errors()->all(),
                'api_meta' => response()->api_meta(),
            ], 400));
        });
    }
}
