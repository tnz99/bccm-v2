<?php

namespace App\Http\Requests\Story\Kingdom\Gallery\Galleries;

use Illuminate\Foundation\Http\FormRequest;

class GalleriesFormRequest extends FormRequest
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
            'kingdom_galleries0_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries0_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries0_description' => [
                'required',
            ],
            'kingdom_galleries0_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],


            'kingdom_galleries1_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries1_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries1_description' => [
                'required',
            ],
            'kingdom_galleries1_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

            'kingdom_galleries2_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries2_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries2_description' => [
                'required',
            ],
            'kingdom_galleries2_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

            'kingdom_galleries3_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries3_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries3_description' => [
                'required',
            ],
            'kingdom_galleries3_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

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


            'kingdom_galleries5_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries5_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries5_description' => [
                'required',
            ],
            'kingdom_galleries5_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

            'kingdom_galleries6_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries6_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries6_description' => [
                'required',
            ],
            'kingdom_galleries6_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

            'kingdom_galleries7_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries7_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries7_description' => [
                'required',
            ],
            'kingdom_galleries7_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],

            'kingdom_galleries8_title' => [
                'required',
                'string'
            ],
            'kingdom_galleries8_subtitle' => [
                'required',
                'string'
            ],
            'kingdom_galleries8_description' => [
                'required',
            ],
            'kingdom_galleries8_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
