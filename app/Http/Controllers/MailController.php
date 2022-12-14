<?php

namespace App\Http\Controllers;

use App\Mail\ContactformRequest;
use App\Mail\Reviewtovalidate;
use App\Mail\SubscriptionConfirmed;
use App\Models\mails;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator'])->except(['mailcontact']);
    }

    public function index(){
        $allmails = mails::all();
        return view('back.pages.mails.index', compact('allmails'));
    }


    public function index2(){
        $allmails = mails::all();
        return view('back.pages.mails.index', compact('allmails'));
    }


    public function mailcontact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $store = new mails();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->subject = $request->subject;
        $store->phone = $request->phone;
        $store->message = $request->message;
        $store->save();

        $maildata = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
          ];

        Mail::to('louis.tychon1@gmail.com')->send(new ContactformRequest($maildata));

        return redirect('/')->with('success', ' Your message was successfully sent!');
    }

    public function subscription(Request $request)
    {
        $maildatassubscription = [
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'country' => $request->country,
          ];

        Mail::to('louis.tychon1@gmail.com')->send(new SubscriptionConfirmed($maildatassubscription));
    }



    public function reviewtovalidate(Request $request)
    {
        $store = new Testimonial();
        $store->rooms_id = $request->rooms_id;
        $store->text = $request->text;
        $store->rating = $request->rating;
        $store->save();

        $inforeviewtovalidate = [
            'rooms_id' => $request->rooms_id,
            'text' => $request->text,
            'rating' => $request->rating,
          ];

        Mail::to('louis.tychon1@gmail.com')->send(new Reviewtovalidate($inforeviewtovalidate));
    }

    public function reservation()
    {
        //instructions in the booking controller
    }


    public function show($id)
    {
        $show = mails::find($id);
        return view('back.pages.mails.show', compact('show'));
    }

    public function destroy($id)
    {
        $todelete = mails::find($id);
        $todelete->delete();
        return redirect('/mail/')->with('success', 'Mail has been successfully deleted');
    }
}
