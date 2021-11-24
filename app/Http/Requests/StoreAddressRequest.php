<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAddressRequest extends FormRequest
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
            "street" => ["required", "min:3", "max:50"],
            "house_number" => ["required", "numeric", "min:1", "max:9999"],
            "city" => ["required", "min:3", "max:50"],
            "zip_code" => ["required", "size:5"],
            "additional_info" => ["nullable", "max:100"],
            // "account_id" => ["required", "exists:account,account_id" , Rule::unique("address", "account_id")],
        ];
    }
}
