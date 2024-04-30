<?php

namespace App\Http\Requests\Story\Flora;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class FloraHomeFormRequest extends FormRequest
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
            'flora_home_title' => [
                'required',
                'string',
                'max_words:5'
            ],
            'flora_home_description' => [
                'required',
            ],
            'flora_home_image' => [
                'nullable',
                'mimes:png,jpg,jpeg'
            ],
        ];
    }
    public function withValidator($validator)
    {
        $validator->addExtension('max_words', function ($attribute, $value, $parameters, $validator) {
            $words = str_word_count($value);
            return $words <= $parameters[0];
        });

        $validator->addReplacer('max_words', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':max_words', $parameters[0], $message);
        });
    }

    public function messages()
    {
        return [
            'flora_home_title.max_words' => 'The :attribute may not have more than :max_words words.',
        ];
    }
}
