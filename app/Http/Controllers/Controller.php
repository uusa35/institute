<?php

namespace App\Http\Controllers;

use App\Src\Gallery;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveImage(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->image->store('public/uploads/images');
            return str_replace('public/', '', $imagePath);
        }
        return null;
    }

    public function saveGallery(Request $request, $gallery)
    {
        if (count($request->gallery) >= 1 && ($request->gallery[0] != null)) {
            foreach ($request->gallery as $item) {
                $imagePath = $item->store('/public/uploads/images');
                $gallery->images()->create(['image_url' => str_replace('public/', '', $imagePath)]);
            }
        }
        return null;
    }
}
