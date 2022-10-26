<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator']);
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



        $store = new Testimonial();
        $store->users_id = Auth::user()->id;
        $store->rooms_id = $request->rooms_id;
        $store->rating = $request->rating;
        $store->text = $request->text;
        $store->save();
        return redirect()->back();
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
