<?php

namespace App\UseCases\User;

use App\Http\Resources\UserResource;
use App\Models\User;

class DestroyAction
{
    public function __invoke(User $user)
    {
        $user->delete();
        return response()->success('削除に成功しました');
    }
}
