<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
            'title_en' => 'required|max:255',
            'title_am' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'rectors_word_en' => 'required',
            'rectors_word_am' => 'required',
            'rectors_word_ru' => 'required',
        ];
    }
}
