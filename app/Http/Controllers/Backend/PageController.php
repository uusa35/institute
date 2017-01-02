<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::with('category')->get();

        return view('backend.modules.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('menu', true)->with('pages')->pluck('name_ar', 'id')->all();

        return view('backend.modules.page.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PageStore $request)
    {
        $imagePath = $this->saveImage($request);

        $request->request->add(['image' => str_replace('public/', '', $imagePath)]);

        $page = $request->presist($request->request->all());

        if ($page) {
            // saving gallery for a post if exists
            $gallery = $page->gallery()->save(new Gallery());

            $gallery->update(['description_ar' => $request->title_ar, 'description_en' => $request->title_en]);

            $this->saveGallery($request, $gallery);
        }

        return redirect()->route('backend.page.index')->with('success', 'page created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);

        return view('frontend.modules.page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::where('menu', true)->with('pages')->pluck('name_ar', 'id')->all();

        $page = Page::whereId($id)->with('gallery.images')->first();

        return view('backend.modules.page.edit', compact('page', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PageUpdate $request, $id)
    {
        $imagePath = $this->saveImage($request);

        if (!is_null($imagePath)) {

            $request->request->add(['image' => str_replace('public/', '', $imagePath)]);

        }

        $page = Page::find($id);

        $page->update($request->request->all());

        if ($page) {

            // saving gallery for a post
            $gallery = $page->gallery()->first();

            // sometimes a user may not save gallery from the first time to a page so the gallery will be null in such case
            if (is_null($gallery)) {

                $gallery = $page->gallery()->save(new Gallery());

            }

            $this->saveGallery($request, $gallery);
        }

        return redirect()->route('backend.page.index')->with('success', 'page updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
