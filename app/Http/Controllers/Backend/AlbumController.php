<?php

namespace App\Http\Controllers\Backend;

use App\Models\Album;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('backend.modules.album.index', compact('albums'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\AlbumStore $request)
    {
        $album = Album::create($request->except('gallery'));

        $gallery = $album->gallery()->save(new Gallery());

        $this->saveGallery($request, $gallery);

        return redirect()->route('backend.album.index')->with('success', 'album stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('album.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::whereId($id)->with('gallery.images')->first();

        return view('backend.modules.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\AlbumUpdate $request, $id)
    {
        $album = Album::whereId($id)->first();

        $album->update($request->except('gallery'));

        $gallery = $album->gallery()->first();

        $this->saveGallery($request, $gallery);

        $gallery->update(['description_ar' => $request->description_ar, 'description_en' => $request->description_en]);

        return redirect()->route('backend.album.index')->with('success','album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect()->back()->with('success', 'album deleted');
    }
}
