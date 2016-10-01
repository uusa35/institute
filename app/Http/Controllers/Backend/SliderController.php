<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('backend.modules.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\SliderStore $request)
    {
        // save the main image
        $imagePath = $this->saveImage($request);

        $request->request->add(['image' => $imagePath]);

        $slider = Slider::create($request->request->all());

        return redirect()->route('backend.slider.index')->with('success', 'slider created');
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
        $slider = Slider::find($id);

        return view('backend.modules.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\SliderUpdate $request, $id)
    {
        // save the main image
        $imagePath = $this->saveImage($request);

        if (!is_null($imagePath)) {

            $request->request->add(['image' => $imagePath]);

        }

        $slider = Slider::find($id)->update($request->request->all());

        if ($slider) {

            return redirect()->route('backend.slider.index')->with('success', 'slider updated');

        }

        return redirect()->route('backend.slider.index')->with('error', 'slider not updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::whereId($id)->first()->delete();

        return redirect()->route('backend.slider.index')->with('success', 'slider deleted');

    }
}
