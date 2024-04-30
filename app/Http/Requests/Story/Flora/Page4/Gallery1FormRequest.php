<?php

namespace App\Http\Requests\Story\Flora\Page4;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class Gallery1FormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'flora_page4_gallery1_title' => [
                'required',
                'string',
                'max_words:3' // Maximum of 3 words in the title
            ],
            'flora_page4_gallery1_subtitle' => [
                'required',
                'string',
                'max_words:10' // Maximum of 5 words in the subtitle
            ],
            'flora_page4_gallery1_description' => [
                'required',
            ],
            'flora_page4_gallery1_image' => [
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
            'flora_page4_gallery1_title.max_words' => 'The :attribute may not have more than :max_words words.',
            'flora_page4_gallery1_subtitle.max_words' => 'The :attribute may not have more than :max_words words.',
        ];
    }
}
