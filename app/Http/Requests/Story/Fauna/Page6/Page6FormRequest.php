<?php

namespace App\Http\Requests\Story\Fauna\Page6;

use Illuminate\Foundation\Http\FormRequest;

class Page6FormRequest extends FormRequest
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
            'fauna_page6_title' => [
                'required',
                'string'
            ],
        ];
    }
}
