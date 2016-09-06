<?php namespace App\Http\Controllers\Frontend;

use App\Src\Contactus;
use App\Src\Post;
use App\Src\Slider;
use App\Src\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

        $post = Post::latest()->first();

        $users = User::subscribed()->take(12)->get()->shuffle();

        return view('frontend.home', compact('sliders', 'sliders', 'users', 'post'))->with('success',' success test');
    }

    public function contactus()
    {
        $contactusInfo = Contactus::first();

        return view('frontend.pages.contactus', compact('contactusInfo'));
    }


    public function searchByName(Request $request)
    {
        $firstName = trim($request->first_name);
        $validator = Validator::make($request->all(), [
            'first_name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $users = User::where('first_name', 'LIKE', "%{$firstName}%")
            ->orWhere('last_name', 'LIKE', "%{$firstName}%")
            ->paginate(12);
        return view('frontend.modules.user.index', compact('users'));
    }

    public function searchById(Request $request)
    {
        $memebershipId = trim($request->membership_id);

        $validator = Validator::make($request->all(), [
            'membership_id' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $users = User::where('membership_id', 'LIKE', "%{$memebershipId}%")
            ->orWhere('id', $memebershipId)
            ->paginate(12);
        return view('frontend.modules.user.index', compact('users'));
    }
}
