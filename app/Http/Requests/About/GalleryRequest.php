<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text_en' => 'max:255',
            'text_am' => 'required|max:255',
            'text_ru' => 'max:255',
            'year' => 'required|numeric|digits:4',
            'full_date' => 'required|max:255',
        ];
    }
}
