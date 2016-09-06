<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStore extends FormRequest
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
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'avatar' => 'mimes:jpeg,bmp,png',
            'email' => 'email|max:255|unique:users',
            'password' => 'required|min:1|confirmed',
            'pdf' => 'mimes:pdf',
            'video_link' => '',
            'other_link' => ''
        ];
    }
}
