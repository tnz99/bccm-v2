<?php

namespace App\Http\Requests\Story\Fauna\Page3;

use Illuminate\Foundation\Http\FormRequest;

class Gallery3FormRequest extends FormRequest
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
            'fauna_page3_gallery3_title' => [
                'required',
                'string'
            ],
            'fauna_page3_gallery3_subtitle' => [
                'required',
                'string'
            ],
            'fauna_page3_gallery3_description' => [
                'required',
            ],
            'fauna_page3_gallery3_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
