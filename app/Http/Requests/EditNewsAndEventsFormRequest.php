<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditNewsAndEventsFormRequest extends FormRequest
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
            'news_title' => [
                'required',
                'string'
            ],


            'news_description' => [
                'required',
            ],
            'news_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
}
