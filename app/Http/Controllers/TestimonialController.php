<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Mail\Reviewtovalidate;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator'])->except(['create','store']);
    }

    public function index()
    {
        $alltestimonials = Testimonial::all();
        return view('back.pages.testimonial.index', compact('alltestimonials'));
    }


    public function create()
    {
        $rooms = Room::all();
        return view('back.pages.testimonial.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rooms_id' => 'required|integer',
            'rating' => 'required|integer',
            'text' => 'required|min:50'
        ]);
        if(Auth::user()->roles_id <=2){
        $store = new Testimonial();
        $store->users_id = Auth::user()->id;
        $store->rooms_id = $request->rooms_id;
        $store->rating = $request->rating;
        $store->show = 1;
        $store->text = $request->text;
        $store->save();
        return redirect('/')->with('success', 'Review successfully created');
        }
        else{
        $store = new Testimonial();
        $store->users_id = Auth::user()->id;
        $store->rooms_id = $request->rooms_id;
        $store->rating = $request->rating;
        $store->show = 0;
        $store->text = $request->text;
        $store->save();

        Mail::to('louis.tychon1@gmail.com')->send(new Reviewtovalidate());

        return redirect('/')->with('success', 'After approval of our team, your review will be published.');}

    }

    public function show($id)
    {

        $alltestimonials = Testimonial::find($id);
        $users = User::all();
        $rooms = Room::all();
        return view('back.pages.testimonial.show', compact('alltestimonials', 'users', 'rooms'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'rooms_id' => 'required|integer',
            'rating' => 'required|integer',
            'text' => 'required|min:50'
        ]);

        $update = Testimonial::find($id);
        $update->users_id = Auth::user()->id;
        $update->rooms_id = $request->rooms_id;
        $update->rating = $request->rating;
        $update->show = 1;
        $update->text = $request->text;
        $update->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Testimonial::find($id);
        $todelete->delete();
        return redirect()->back();
    }
}
