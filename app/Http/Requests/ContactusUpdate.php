<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactusUpdate extends FormRequest
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
            'company_name_ar' => 'required|min:3',
            'company_name_en' => 'required|min:3',
            'facebook_url' => '',
            'twitter_url' => '',
            'instagram_url' => '',
            'youtube_channel' => '',
            'phone' => '',
            'mobile' => '',
            'email' => 'required|email',
            'address_ar' => 'required',
            'address_en' => 'required',
            'latitude' => 'numeric',
            'longitude' => 'numeric',
            'logo' => 'mimes:jpeg,bmp,png',
        ];
    }
}
