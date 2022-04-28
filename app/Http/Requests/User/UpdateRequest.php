<?php

namespace App\Http\Requests\User;

use App\Http\Requests\ApiCommonRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends ApiCommonRequest
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
            'name' => ['string'],
            'email' => ['email'],
            'password' => ['string'],
            'tel' => ['string'],
            'zip' => ['string'],
            'address1' => ['string'],
            'address2' => ['string'],
            'address3' => ['string'],
            'icon_url' => ['url'],
            'description' => ['string']
        ];
    }
}
