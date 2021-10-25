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
            "first_name" => ["required", "min:3", "max:50"],
            "last_name" => ["required", "min:3", "max:50"],
            "email" => ["required", "min:5", "max:100", "email",  Rule::unique("account", "email")],
            "phone_number" => ["max:20", "nullable"],
            "password" => ["required", "confirmed", "min:6", "max:60"],
            // "password_confirmation" => ["required", "min:6", "max:60"],
        ];
    }
}
