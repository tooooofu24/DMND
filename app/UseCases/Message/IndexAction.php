<?php

namespace App\UseCases\Message;

use App\Http\Requests\Message\IndexRequest;
use App\Http\Resources\MessageResource;
use App\Models\Message;

class IndexAction
{
    public function __invoke(IndexRequest $request)
    {
        $query = Message::query();

        $query->where('talk_room_id', $request->talk_room_id);

        $limit = $request->input('limit', 20);

        return MessageResource::collection($query->paginate($limit));
    }
}
