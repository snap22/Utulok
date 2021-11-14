<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
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
            "contact_email" => ["required", "email", "max:100"],
            "contact_title" => ["required", "max:50", "min:3"],
            "contact_message" => ["required", "max:500"]
        ];
    }
}
