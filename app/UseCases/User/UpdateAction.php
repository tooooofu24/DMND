<?php

namespace App\UseCases\User;

use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UpdateAction
{
    public function __invoke(User $user, UpdateRequest $request)
    {
        $user->fill($request->all())->save();
        return response()->success('更新しました');
    }
}
