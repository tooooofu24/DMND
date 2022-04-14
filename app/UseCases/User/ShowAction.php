<?php

namespace App\UseCases\User;

use App\Http\Resources\UserResource;
use App\Models\User;

class ShowAction
{
    public function __invoke($id)
    {
        $user = User::withAllrelations()->findOrFail($id);
        return new UserResource($user);
    }
}
