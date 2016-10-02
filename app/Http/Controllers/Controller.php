<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\Facades\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveImage(Request $request, $inputName = 'image', $width = '1150', $height = '360')
    {
        if ($request->hasFile($inputName)) {
            $imagePath = $request->$inputName->store('public/uploads/images');
            $imagePath = str_replace('public/', '', $imagePath);
            $img = Image::make(storage_path('app/public/' . $imagePath));
            $img->resize($width, $height);
            $img->save();
            return $imagePath;
        }
        return null;
    }

    public function saveGallery(Request $request, $gallery, $width = '450', $height = '450')
    {
        if (count($request->gallery) >= 1 && ($request->gallery[0] != null)) {
            foreach ($request->gallery as $item) {
                $imagePath = $item->store('/public/uploads/images');
                $imagePath = str_replace('public/', '', $imagePath);
                $img = Image::make(storage_path('app/public/' . $imagePath));
                $img = Image::make(storage_path('app/public/' . $imagePath));
                $img->resize($width, $height);
                $img->save();
                $gallery->images()->create(['image_url' => $imagePath]);
            }
        }
        return $gallery;
    }
}
