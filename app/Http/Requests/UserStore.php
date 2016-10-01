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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'avatar' => 'required|mimes:jpeg,bmp,png',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:1|confirmed',
            'pdf' => 'mimes:pdf',
            'video_link' => 'url',
            'other_link' => 'url'
        ];
    }
}
