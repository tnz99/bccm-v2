<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class Gallery4FormRequest extends FormRequest
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
            'gallery4_title' => [
                'required',
                'string'
            ],


            'gallery4_description' => [
                'required',
            ],
            'gallery4_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
