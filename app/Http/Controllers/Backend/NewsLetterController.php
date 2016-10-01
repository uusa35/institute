<?php

namespace App\Http\Controllers\Backend;

use App\Mail\NewsLetterCampaign;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;
use Spatie\Newsletter\Newsletter as MailChimpNewsletter;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Notifications\Notifiable;

class NewsLetterController extends Controller
{
    use Notifiable;
    public $subscriber;

    public function __construct(MailChimpNewsletter $subscriber)
    {
        $this->subscriber = $subscriber;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Newsletter::all();
        return view('backend.modules.newsletter.index', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\NewsletterStore $request)
    {
        $this->subscriber->subscribe(request()->email, ['firstName' => request()->name]);

        Newsletter::create($request->all());

        return redirect()->route('backend.newsletter.index')->with('success', 'subscriber created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriber = Newsletter::find($id);

        if ($this->subscriber->hasMember($subscriber->email)) {

            $this->subscriber->unsubscribe($subscriber->email);

        }

        return view('backend.modules.newsletter.edit', compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\NewsletterUpdate $request, $id)
    {
        $subscriber = Newsletter::whereId($id)->first()->update($request->all());

        $this->subscriber->subscribe(request()->email, ['firstName' => request()->name]);

        return redirect()->route('backend.newsletter.index')->with('success', 'subscriber updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscriber = Newsletter::whereId($id)->first();

        $this->subscriber->unsubscribe($subscriber->email);

        $subscriber->delete();

        return redirect()->route('backend.newsletter.index')->with('success', 'subscriber deleted');
    }

    public function getCreateCampaign()
    {
        return view('backend.modules.newsletter.campaign');
    }

    public function postCreateCampaign(Requests\sendCampaign $request)
    {
        $subscirbers = Newsletter::where('active', true)->get();

        foreach ($subscirbers as $subscirber) {

            Mail::to($subscirber)
                ->queue(new NewsLetterCampaign($subscirber, $request->title, $request->body));

        }

        return redirect()->route('backend.newsletter.index')->with('success', 'campaign sent successfully to all subscribers');
    }
}
