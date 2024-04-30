<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'contact_title' => [
                'required',
                'string'
            ],
            'contact_description' => [
                'required',
            ],
            'contact_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
