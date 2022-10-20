<?php

namespace App\Http\Controllers;

use App\Models\HotelInfo;
use App\Models\mails;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('front.pages.contact');
    }
}
