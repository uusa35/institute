<?php

namespace App\Http\Controllers\Backend;

use App\Models\Contactus;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $totalUsers = Auth::user()->totalusers;
        $totalSubscribed = Auth::user()->totalsubscribed;
        $totalNotActive = Auth::user()->totalnotactive;

        return view('backend.home',compact('totalUsers','totalSubscribed','totalNotActive'));
    }

    public function contactus()
    {
        $contactusInfo = Contactus::first();

        return view('backend.pages.contactus',compact('contactusInfo'));
    }
}
