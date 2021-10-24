<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => ["required", "min:3", "max:50"],
            "last_name" => ["required", "min:3", "max:50"],
            "email" => ["required", "min:5", "max:100", Rule::unique("account", "email")],
            "phone_number" => ["max:20"],
            "password" => ["required", "min:7", "max:60"],
            "confirm_password" => ["required", "min:7", "max:60"],
        ];
    }
}
