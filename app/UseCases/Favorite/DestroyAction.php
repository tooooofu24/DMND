<?php

namespace App\UseCases\Favorite;

use App\Models\Favorite;

class DestroyAction
{
    public function __invoke($favorite)
    {
        $favorite->delete();
        return response()->success('いいね解除しました');
    }
}
