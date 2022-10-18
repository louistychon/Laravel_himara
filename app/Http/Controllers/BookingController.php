<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index(){
        $roomtypes = RoomType::all();
        return view('front.pages.booking', compact('roomtypes'));
    }

    public function store(Request $request){
        $arr = explode(" - ", $request->date_start, 2);

        $store = new Booking();
        $store->date_start = $arr[0];
        $store->date_end = $arr[1];
        $store->reservation_id = rand(1008158585, 2500000000);
        $store->user_id = Auth::user()->id;
        $store->roomtype_id = $request->roomtype_id;
        $store->number_adults = $request->number_adults;
        $store->number_children = $request->number_children;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->booking_comment = $request->booking_comment;
        $store->save();

        return redirect('/')->with('success', 'Check your email, we will get back to you soon');
    }
}
