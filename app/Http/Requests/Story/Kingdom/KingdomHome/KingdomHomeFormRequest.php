<?php

namespace App\Http\Requests\Story\Kingdom\KingdomHome;

use Illuminate\Foundation\Http\FormRequest;

class KingdomHomeFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kingdom_home_title' => [
                'required',
                'string'
            ],
            'kingdom_home_description' => [
                'required',
            ],
            'kingdom_home_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
