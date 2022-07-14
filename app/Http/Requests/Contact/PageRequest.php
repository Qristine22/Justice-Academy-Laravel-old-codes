<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'address_en' =>'max:255',
            'address_am' =>'required|max:255',
            'address_ru' =>'max:255',
            'mail' =>'required|max:255',
            'phone' =>'required',
            'map' =>'required',
        ];
    }
}
