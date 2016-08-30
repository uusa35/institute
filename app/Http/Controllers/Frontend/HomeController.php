<?php namespace App\Http\Controllers\Frontend;

use App\Src\Contactus;
use App\Src\Post;
use App\Src\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::take(5)->get();

        $posts = Post::latest();

        return view('frontend.home',compact('sliders','sliders'));
    }

    public function contactus()
    {
        $contactusInfo = Contactus::first();

        return view('frontend.pages.contactus', compact('contactusInfo'));
    }
}
