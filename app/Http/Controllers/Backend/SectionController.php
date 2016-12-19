<?php

namespace App\Http\Controllers\Backend;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::has('page')->with('page')->get();

        return view('backend.modules.section.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_id = request()->page_id;

        return view('backend.modules.section.create', compact('page_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\SectionStore $request)
    {
        if ($request->file('image')) {
            $imagePath = $request->image->store('public/uploads/images');
            $request->request->add(['image' => str_replace('public/', '', $imagePath)]);
        }

        if ($request->file('pdf')) {
            $pdfPath = $request->pdf->store('public/uploads/pdfs');
            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }

        Section::create($request->request->all());

        return redirect()->route('backend.page.index', $request->page_id)->with('success', 'section created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sections = Section::where('page_id', request()->page_id)->with('page')->get();

        return view('backend.modules.section.show', compact('sections'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Section::find($id);

        return view('backend.modules.section.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\SectionUpdate $request, $id)
    {
        if ($request->file('image')) {
            $imagePath = $request->image->store('public/uploads/images');
            $request->request->add(['image' => str_replace('public/', '', $imagePath)]);
        }

        if ($request->file('pdf')) {
            $pdfPath = $request->pdf->store('public/uploads/pdfs');
            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }

        Section::find($id)->update($request->request->all());

        return redirect()->route('backend.section.show', [$id, 'page_id' => $request->page_id])->with('success', 'section updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->destroy();
        return view('backend.modules.page.show', request()->page_id);
    }
}
