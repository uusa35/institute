<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('backend.modules.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = config('app.countriesList');

        $types = ['IBH', 'IBNLP', 'user'];

        return view('backend.modules.user.create', compact('countries', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserStore $request)
    {
        if ($request->file('pdf')) {
            $pdfPath = $request->pdf->store('public/uploads/pdfs');
            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }

        if ($request->file('avatar')) {

            $imagePath = $this->saveImage($request, 'avatar', '200', '200');

            $request->request->add(['avatar' => str_replace('public/', '', $imagePath)]);
        }

        $user = User::create($request->request->all());

        $user->update(['password' => bcrypt($request->password)]);

        return redirect()->route('backend.user.index')->with('success', 'user created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('frontend.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $countries = config('app.countriesList');

        return view('backend.modules.user.edit', compact('user', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UserUpdate $request, $id)
    {
        if ($request->file('pdf')) {
            $pdfPath = $request->pdf->store('public/uploads/pdfs');
            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }

        if ($request->file('avatar')) {
            $avatarPath = $request->avatar->store('public/uploads/avatars');
            $request->request->add(['avatar' => str_replace('public/', '', $avatarPath)]);
        }

        User::find($id)->update($request->request->all());

        if ($request->has('password')) {

            User::find($id)->update(['password' => bcrypt($request->password)]);
        }

        return redirect()->route('backend.user.index')->with('success', 'user updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function getResetPassword($id)
    {
        return view('backend.modules.user.reset_password', compact('id'));
    }

    public function postResetPassword(Request $request)
    {
        $user = User::find($request->id)->update(['password' => bcrypt($request->password)]);

        return redirect()->route('backend.user.index')->with('success', 'password has been reset successfully');
    }
}
