<?php

namespace App\Http\Requests\Story\Kingdom\Gallery\Galleries;

use Illuminate\Foundation\Http\FormRequest;

class Galleries5FormRequest extends FormRequest
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
            'kingdom_galleries4_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries4_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries4_description' => [
                'required',
            ],
            'kingdom_galleries4_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
