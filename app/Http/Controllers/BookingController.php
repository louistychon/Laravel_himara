<?php

namespace App\Http\Controllers;

use App\Mail\ReservationConfirmed;
use App\Mail\SubscriptionConfirmed;
use App\Models\Booking;
use App\Models\Room;
use App\Models\RoomImg;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{

    public function dashboard()
    {
        $bookings = Booking::all();
        return view('back.pages.dashboard', compact('bookings'));
    }

    public function index()
    {
        $rooms = Room::all()->take(3);
        $roomtypes = RoomType::all();
        $roomimgs = RoomImg::all();
        return view('front.pages.booking', compact('roomtypes', 'rooms', 'roomimgs'));
    }

    public function store(Request $request)
    {
        $arr = explode(" - ", $request->date_start, 2);

        $request->validate([
            'name' => 'required',
            'roomtype_id' => 'required',
            'number_adults' => 'required|integer|max:10|min:1',
            'number_children' => 'required|integer|max:8',
        ]);


        $store = new Booking();
        $store->date_start = $arr[0];
        $store->date_end = $arr[1];
        $store->reservation_id = rand(1008158585, 2500000000);
        $store->user_id = Auth::user()->id;
        $store->roomtype_id = $request->roomtype_id;
        if ($request->has('room_id')) {
            $store->room_id = $request->room_id;
        } else {
            $store->room_id = Room::where('roomtypes_id', '=', $request->roomtype_id)
            ->inRandomOrder()
            ->pluck('id')
            ->first();
        }
        $store->number_adults = $request->number_adults;
        $store->number_children = $request->number_children;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->booking_comment = $request->booking_comment;
        $store->save();

        $bookinginfo = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'date_start' => $store['date_start'],
            'date_end' => $store['date_end'],
            'number_adults' => $request->get('number_adults'),
            'number_children' => $request->get('number_children'),
            'phone' => $request->get('phone'),
            'booking_comment' => $request->get('booking_comment'),
            'reservation_id' => $store['reservation_id'],
        ];

        Mail::to('louis.tychon1@gmail.com')->send(new ReservationConfirmed($bookinginfo));

        return redirect('/')->with('success', 'Check your email, we will get back to you soon');
    }
}
