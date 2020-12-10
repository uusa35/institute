<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactusEmail extends FormRequest
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
            'name' => 'required|min:5|string',
            'email' => 'required|email|min:5',
            'subject' => 'required|min:5|max:300',
            'content' => 'required|min:10|max:2000'
        ];
    }
}
