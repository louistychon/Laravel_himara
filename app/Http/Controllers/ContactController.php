<?php

namespace App\Http\Controllers;

use App\Models\HotelInfo;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $hotelinfos = HotelInfo::all();
        return view('front.pages.contact', compact('hotelinfos'));
    }
}
