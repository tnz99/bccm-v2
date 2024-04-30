<?php

namespace App\Http\Requests\Story\Fauna\Page5;

use Illuminate\Foundation\Http\FormRequest;

class Gallery2FormRequest extends FormRequest
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
            'fauna_page5_gallery2_title' => [
                'required',
                'string'
            ],
            'fauna_page5_gallery2_subtitle' => [
                'required',
                'string'
            ],
            'fauna_page5_gallery2_description' => [
                'required',
            ],
            'fauna_page5_gallery2_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
