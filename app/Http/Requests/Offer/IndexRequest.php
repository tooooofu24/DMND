<?php

namespace App\Http\Requests\Offer;

use App\Consts\Condition;
use App\Http\Requests\ApiCommonRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'q' => ['nullable', 'string'],
            'category_id_list' => ['nullable', 'array'],
            'is_open' => ['nullable', 'bool'],
            'condition' => ['nullable', 'integer', Rule::in(Condition::LIST),]
        ];
    }
}
