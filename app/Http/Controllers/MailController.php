<?php

namespace App\Http\Controllers;

use App\Mail\ContactformRequest;
use App\Mail\ReservationConfirmed;
use App\Mail\SubscriptionConfirmed;
use App\Models\mails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['mailcontact']);
    }

    public function index(){
        $allmails = mails::all();
        return view('back.pages.mails.index', compact('allmails'));
    }


    public function mailcontact(Request $request)
    {
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

        return redirect('/contact');
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

    public function reservation()
    {
        //
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
