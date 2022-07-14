<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class GoverningBoardStaffRequest extends FormRequest
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
            'position_en' => 'max:255',
            'position_am' => 'required|max:255',
            'position_ru' => 'max:255',
            'biography' => 'required',
        ];
    }
}
