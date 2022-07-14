<?php

namespace App\Http\Requests\DistanceLearning;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            'title_en' => 'max:255',
            'title_am' => 'required|max:255',
            'title_ru' => 'max:255',
            'text_am' => 'required',
        ];
    }
}
