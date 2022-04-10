<?php

namespace App\Http\Requests\Offer\Favorite;

use App\Http\Requests\ApiCommonRequest;
use Illuminate\Foundation\Http\FormRequest;

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
            'page' => ['nullable', 'integer'],
            'limit' => ['nullable', 'integer'],
            'user_id' => ['required', 'integer']
        ];
    }
}
