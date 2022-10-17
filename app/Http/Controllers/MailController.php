<?php

namespace App\Http\Controllers;

use App\Mail\ContactformRequest;
use App\Mail\ReservationConfirmed;
use App\Mail\SubscriptionConfirmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailcontact()
    {
        Mail::to('louis.tychon1@gmail.com')->send(new ContactformRequest());
    }

    public function subscription()
    {
        Mail::to('louis.tychon1@gmail.com')->send(new SubscriptionConfirmed());
    }

    public function reservation()
    {
        Mail::to('louis.tychon1@gmail.com')->send(new ReservationConfirmed());
    }
}
