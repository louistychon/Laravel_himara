<?php

namespace App\Http\Controllers;

use App\Mail\ContactformRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailcontact()
    {
        Mail::to('louis.tychon1@gmail.com')->send(new ContactformRequest());
    }
}
