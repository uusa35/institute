<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderUpdate extends FormRequest
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
            'caption_ar' => 'required|min:3',
            'caption_en' => 'required|min:3',
            'url' => 'required:min:3',
            'image' => 'mimes:jpeg,bmp,png',
            'type' => 'required'
        ];
    }
}
