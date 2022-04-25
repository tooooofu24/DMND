<?php

namespace App\Http\Requests\Favorite;

use App\Http\Requests\ApiCommonRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends ApiCommonRequest
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
            'offer_id' => [
                'required', 'integer', 'exists:offers,id',
                Rule::unique('favorites', 'offer_id')->where('user_id', request()->user()->id),
            ],
        ];
    }
}
