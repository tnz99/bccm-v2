<?php

namespace App\Http\Requests\Story\Flora\Page3;

use Illuminate\Foundation\Http\FormRequest;

class Gallery7FormRequest extends FormRequest
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
            'flora_page3_gallery7_title' => [
                'required',
                'string'
            ],
            'flora_page3_gallery7_subtitle' => [
                'required',
                'string'
            ],
            'flora_page3_gallery7_description' => [
                'required',
            ],
            'flora_page3_gallery7_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
