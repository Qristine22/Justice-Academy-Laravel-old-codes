<?php

namespace App\Http\Requests\FullTime;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TrainingProgramRequest extends FormRequest
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
            'name_en' => 'max:255',
            'name_am' => 'required|max:255',
            'name_ru' => 'max:255',
            'category' => [
                'required',
                Rule::in(['judge', 'prosecutor', 'investigator']),
            ],
            'year' => 'required|numeric|digits:4',
            'description' => 'required',
        ];
    }
}
