<?php

namespace App\Http\Requests\Story\Flora;

use Illuminate\Foundation\Http\FormRequest;

class FloraHomeFormRequest extends FormRequest
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
            'flora_home_title' => [
                'required',
                'string'
            ],
            'flora_home_description' => [
                'required',
            ],
            'flora_home_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
