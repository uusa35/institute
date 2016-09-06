<?php

namespace App\Http\Controllers\Backend;

use App\Src\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactusInfo = Contactus::first();

        return view('backend.modules.contactus.index', compact('contactusInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->to('/contactus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Cache::forget('contactusInfo');

        $contactusInfo = Contactus::first();

        return view('backend.modules.contactus.edit', compact('contactusInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ContactusUpdate $request, $id)
    {
        if ($request->file('logo')) {
            $logoPath = $request->logo->store('public/uploads/images');
            $request->request->add(['logo' => str_replace('public/','',$logoPath)]);
        }

        Contactus::whereId(1)->first()->update($request->request->all());

        return redirect()->route('backend.contactus.index')->with('success','contactus info updated');
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
