<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!auth()->user()->can('isAdmin')) {

            if ($this->user()->id == auth()->user()->id) {

                return true;

            }

            return false;

        }
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
            'avatar' => 'mimes:jpeg,bmp,png',
            'email' => 'required|email|max:255',
            'password' => 'sometimes|min:1|confirmed',
            'pdf' => 'mimes:pdf',
            'video_link' => 'url',
            'other_link' => 'url',
            'membership_id' => 'required|alpha_num',
            'type' => 'required',
            'gender' => 'required'
        ];
    }
}
