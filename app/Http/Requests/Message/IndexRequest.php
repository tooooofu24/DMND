<?php

namespace App\Http\Requests\Message;

use App\Http\Requests\ApiCommonRequest;

class IndexRequest extends ApiCommonRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'talk_room_id' => ['required', 'integer', 'exists:talk_rooms,id'],
            'page' => ['nullable', 'integer'],
            'limit' => ['nullable', 'integer'],
        ];
    }
}
