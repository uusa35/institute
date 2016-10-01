<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostStore extends FormRequest
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
            'title_ar' => 'required:min:3',
            'title_en' => 'required:min:3',
            'body_ar' => 'required:min:5',
            'body_en' => 'required:min:5',
            'image' => 'required|mimes:jpeg,bmp,png',
            'gallery' => 'array',
        ];
    }

    public function presist($request)
    {
        return Post::create($request);
    }
}
