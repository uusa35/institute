<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionUpdate extends FormRequest
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
            'header_ar' => 'required',
            'header_en' => 'required',
            'content_ar' => 'required',
            'content_en' => 'required',
            'image' => 'mimes:jpeg,bmp,png',
            'page_id' => 'required',
            'type' => 'required',
            'pdf' => 'mimes:pdf'
        ];
    }
}
