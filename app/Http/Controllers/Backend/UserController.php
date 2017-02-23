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
        $types = ['IBH', 'IBNLP', 'user'];

        return view('backend.modules.user.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserStore $request)
    {
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->pdf->store('public/uploads/pdfs');
            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }

        if ($request->file('avatar')) {

            $imagePath = $this->saveImage($request, 'avatar', '100', '115');
            $request->request->add(['avatar' => str_replace('public/', '', $imagePath)]);
        }
        $request->request->remove('password_confirmation');

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

        return view('frontend.modules.user.profile', compact('user'));
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

        return view('backend.modules.user.edit', compact('user'));
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
        if ($request->hasFile('pdf')) {
            $pdfPath = $request->pdf->store('public/uploads/pdfs');
            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }


        if ($request->hasFile('avatar')) {

            $imagePath = $this->saveImage($request, 'avatar', '100', '115');

            $request->request->add(['avatar' => str_replace('public/', '', $imagePath)]);
        }


        if ($request->has('password')) {

            User::find($id)->update(['password' => bcrypt($request->password)]);

            $request->request->remove('password_confirmation');
        }

        User::find($id)->update($request->request->all());

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
        $user = User::whereId($id)->first();
        $user->delete();
        return redirect()->back()->with('success', 'user deleted');
    }

    public function getResetPassword($id)
    {
        return view('backend.modules.user.reset_password', compact('id'));
    }

    public function postResetPassword(Request $request)
    {
        $user = User::whereId($request->id)->update(['password' => bcrypt($request->password)]);

        return redirect()->route('backend.user.index')->with('success', 'password has been reset successfully');
    }
}
