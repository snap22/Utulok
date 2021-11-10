<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDogRequest extends FormRequest
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
            "name" => ["required", "min:3", "max:50"],
            "age" => ["required", "integer", "min:0", "max:50"],
            "gender" => ["required", Rule::in(['F', 'M'])],
            "breed_id" => ["max:20", "nullable"],
            "info" => ["max:100", "nullable"],
            "picture" => ["image", "nullable", "max:10240"],
        ];
    }
}

