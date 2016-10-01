<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.modules.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostStore $request)
    {
        // save the main image
        $imagePath = $this->saveImage($request);

        $request->request->add(['image' => $imagePath]);

        $post = $request->presist($request->request->all());

        if ($post) {

            // saving gallery for a post if exists
            $gallery = $post->gallery()->save(new Gallery());

            $this->saveGallery($request, $gallery);
        }

        return redirect()->route('backend.post.index')->with('success', 'post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('backend.modules.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // save the main image
        $imagePath = $this->saveImage($request);

        $request->request->add(['image' => $imagePath]);

        $post = Post::find($id);

        $post->update($request->request->all());

        if ($post) {
            // saving gallery for a post
            $gallery = $post->gallery()->first();

            $this->saveGallery($request, $gallery);
        }

        return redirect()->route('backend.post.index')->with('success', 'post saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::whereId($id)->first();

        if ($post->gallery()->first()) {

            $gallery = $post->gallery()->first();

            if ($gallery->images()) {

                $gallery->images()->delete();

            }

            $gallery->delete();

        }

        $post->delete();

        return redirect()->route('backend.post.index')->with('success', 'post deleted');
    }
}
