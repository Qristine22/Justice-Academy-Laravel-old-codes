<?php

namespace App\Http\Requests\Library;

use Illuminate\Foundation\Http\FormRequest;

class VideoLectureRequest extends FormRequest
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
            'topic_en' => 'max:255',
            'topic_am' => 'required|max:255',
            'topic_ru' => 'max:255',
            'lecturer_en' => 'max:255',
            'lecturer_am' => 'required|max:255',
            'lecturer_ru' => 'max:255',
            'video' => 'required',
        ];
    }
}
