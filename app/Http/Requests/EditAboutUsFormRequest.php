<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAboutUsFormRequest extends FormRequest
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
            'about_title' => [
                'required',
                'string'
            ],
            'about_description' => [
                'required',
            ],
            'about_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
