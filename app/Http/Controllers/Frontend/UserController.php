<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->put('filter', request()->get('filter'));

        $filter = session('filter');

        $title = $filter ? $filter : 'ibh';

        // only trainer
        $featuredAssistants= User::inRandomOrder()->where($title, true)->featured()->assistant()->take(4)->get();

        // master + asistant
        $featuredMasters = User::inRandomOrder()->where($title, true)->featured()->master()->take(4)->get();

        $q = User::query();

        if (session('filter')) {

            $q->where($title, true);

        }

        if (request()->get('country')) {

            $q->where('country', '=', request()->get('country'));

        }

        $users = $q->paginate(12);

        return view('frontend.modules.user.index', compact('users', 'featuredAssistants', 'featuredMasters'));
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
        $user = User::whereId($id)->first();

        $userCode = null;
        $userCodeIBH = null;
        $userCodeIBNLP = null;
        $graduationYear = null;
        $filter = session()->get('filter');

        if (session()->has('filter')) {
            if ($user->ibh && $user->ibnlp) {
                $userTypeTrans = $filter . '_' . $user->type;
                if ($filter === 'ibh') {
                    $userCode = $user->ibh_membership_id;
                    $graduationYear = $user->graduation_year;
                } elseif ($filter === 'ibnlp') {
                    $userCode = $user->ibnlp_membership_id;
                    $graduationYear = $user->ibnlp_graduation_year;
                }
            } elseif ($user->ibh) {
                $userTypeTrans = $user->ibhCertificate . '_' . $user->type;
                $userCode = $user->ibh_membership_id;
                $graduationYear = $user->graduation_year;
            } elseif ($user->ibnlp) {
                $userTypeTrans = $user->ibnlpCertificate . '_' . $user->type;
                $userCode = $user->ibnlp_membership_id;
                $graduationYear = $user->ibnlp_graduation_year;
            }
        } else {
            $userCodeIBH = $user->ibh_membership_id;
            $userCodeIBNLP = $user->ibnlp_membership_id;
            $userTypeTrans = ($user->ibh) ? $user->ibhCertificate . '_' . $user->type : $user->ibnlpCertificate . '_' . $user->type;
            $graduationYear = $user->graduation_year;
        }

        return view('frontend.modules.user.profile', compact('user', 'userTypeTrans', 'userCode', 'userCodeIBH', 'userCodeIBNLP','graduationYear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('isOwner', $id);

        $user = User::find($id);

        return view('frontend.modules.user.edit', compact('user'));
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

        $this->authorize('isOwner', $id);

        $user = User::whereId($id)->first();

        if ($request->hasFile('pdf')) {

            $pdfPath = $request->pdf->store('public/uploads/pdfs');

            $request->request->add(['pdf' => str_replace('public/', '', $pdfPath)]);
        }

        if ($request->hasFile('avatar')) {

            $imagePath = $this->saveImage($request, 'avatar', '100', '115');

            $request->request->add(['avatar' => str_replace('public/', '', $imagePath)]);
        }

        $user->update($request->request->all());

        if ($request->has('password')) {

            $user->update(['password' => bcrypt($request->password)]);

        }

        return redirect()->route('home')->with('success', 'profile updated succesfully');

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
