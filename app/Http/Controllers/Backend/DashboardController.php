<?php

namespace App\Http\Controllers\Backend;

use App\Src\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.home');
    }

    public function contactus()
    {
        $contactusInfo = Contactus::first();

        return view('backend.pages.contactus',compact('contactusInfo'));
    }
}
