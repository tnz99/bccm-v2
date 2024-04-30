<?php

namespace App\Http\Requests\Story\Fauna\Page5;

use Illuminate\Foundation\Http\FormRequest;

class Page5FormRequest extends FormRequest
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
            'fauna_page5_title' => [
                'required',
                'string'
            ],
        ];
    }
}
