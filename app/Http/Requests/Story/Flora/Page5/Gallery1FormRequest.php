<?php

namespace App\Http\Requests\Story\Flora\Page5;

use Illuminate\Foundation\Http\FormRequest;

class Gallery1FormRequest extends FormRequest
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
            'flora_page5_gallery1_title' => [
                'required',
                'string'
            ],
            'flora_page5_gallery1_subtitle' => [
                'required',
                'string'
            ],
            'flora_page5_gallery1_description' => [
                'required',
            ],
            'flora_page5_gallery1_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}