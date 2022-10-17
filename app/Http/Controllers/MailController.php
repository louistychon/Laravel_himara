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

    }

    public function reservation()
    {
        Mail::to('louis.tychon1@gmail.com')->send(new ReservationConfirmed());
    }


    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $show = Mail::find($id);
        return view('back.pages.mail.show', compact('show'));
    }

    public function destroy($id)
    {
        $todelete = Mail::find($id);
        $todelete->delete();
        return redirect()->back();
    }
}
