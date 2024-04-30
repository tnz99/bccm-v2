<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditHomeFormRequest extends FormRequest
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
            'home_title' => [
                'required',
                'string'
            ],
            'home_subtitle' => [
                'required',
                'string'
            ],
            'home_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

        ];
    }
}
