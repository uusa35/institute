<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests\ContactusEmail;
use App\Http\Requests\NewsletterPost;
use App\Mail\MembershipRegisterRequest;
use App\Models\Contactus;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public $subscriber;

    public function __construct(Newsletter $subscriber)
    {
        $this->subscriber = $subscriber;
    }


//    public function test()
//    {
//        $data['message'] = 'hello Usama from inside my test route ? !!';
//
//        $pusher = app()->make('Pusher')->trigger('channelName', 'eventName', $data);
//
//        if ($pusher) {
//            return 'done';
//        } else {
//            return 'not done';
//        }
//
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        $posts = Post::latest()->take(4)->get();

        $users = User::inRandomOrder()->subscribed()->featured()->trainer()->take(12)->get()->shuffle();

        return view('frontend.home', compact('sliders', 'users', 'posts'));
    }

    public function getContactus()
    {
        $contactusInfo = Contactus::first();

        $countries = ['Kuwait', 'Egypt', 'UAE', 'Qatar', 'Bahrain', 'KSA'];

        return view('frontend.pages.contactus', compact('contactusInfo', 'countries'));
    }

    public function postContactus(ContactusEmail $request)
    {
        $contactusInfo = Contactus::first();

        $email = Mail::to(config('mail.from.address'))->queue(new \App\Mail\Contactus($request->all(), $contactusInfo));

        return redirect()->back()->with('success', 'email has been sent');

    }

    public function postNewsletter(NewsletterPost $request)
    {
        $newsletter = Newsletter::create($request->all());

        if ($newsletter) {

            return redirect()->back()->with('success', 'you have subscribed successfully to our newsletter list');

        }

        return redirect()->back()->with('error', 'error occured please try again later ...');
    }


    public function getRegisterMembership()
    {
        return view('frontend.pages.register_membership');
    }

    public function postRegisterMembership()
    {
        $contactusInfo = Contactus::first();

        $email = Mail::to('member@ibh-ibnlp.com')->queue(new MembershipRegisterRequest(request()->all(),$contactusInfo->address));

        return redirect()->back()->with('success', 'email has been sent');

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

        $users = User::where('ibh_membership_id', 'LIKE', "%{$memebershipId}%")
            ->orWhere('id', $memebershipId)
            ->orWhere('ibnlp_membership_id', $memebershipId)
            ->paginate(12);
        return view('frontend.modules.user.index', compact('users'));
    }

}
