<?php

namespace App\Http\Requests\story;

use Illuminate\Foundation\Http\FormRequest;

class StoriesFormRequest extends FormRequest
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
            'stoies_title' => [
                'required',
                'string'
            ],
        ];
    }
}
