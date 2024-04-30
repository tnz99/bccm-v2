<?php

namespace App\Http\Requests\Story\Kingdom\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class KingdomGalleryFormRequest extends FormRequest
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
            'kingdom_gallery_title' => [
                'required',
                'string'
            ],
        ];
    }
}
