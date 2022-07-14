<?php

namespace App\Http\Requests\About;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class GraduateRequest extends FormRequest
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
            'name' => 'required|min:4|max:255',
            'position' => 'required|max:255',
            'year' => 'required|numeric|digits:4',
            'position' => [
                'required',
                Rule::in(['judge', 'prosecutor', 'investigator']),
            ]
        ];
    }
}
