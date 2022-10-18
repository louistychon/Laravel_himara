<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Room_roomservices;
use App\Models\Room_tags;
use App\Models\RoomImg;
use App\Models\RoomService;
use App\Models\Roomtags;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class RoomController extends Controller
{

    public function indexall()
    {
        $allrooms = Room::all();
        $roomtypes = RoomType::withCount('rooms')->get();
        $testimonials = Testimonial::all();
        $allroomsimg = RoomImg::all();
        return view('front.pages.rooms-list', ['allrooms' => Room::paginate(10)], compact('allrooms', 'roomtypes', 'testimonials'));
    }

    public function showfront($id)
    {
        $testimonials = Testimonial::where('rooms_id', '=', $id)->get();
        $room = Room::find($id);
        $rooms = Room::all()->take(3);
        $services = RoomService::all();
        $ratings = $testimonials->avg('rating');
        $ratingcount = $testimonials->count();

        if ($testimonials->count() == 0) {
            $ratingcount = 0;
        }

        $numberrating5 = 0;
        $numberrating4 = 0;
        $numberrating3 = 0;
        $numberrating2 = 0;
        $numberrating1 = 0;

        foreach ($testimonials as $rating) {
            if ($rating->rating == 5) {
                $numberrating5++;
            } elseif ($rating->rating == 4) {
                $numberrating4++;
            } elseif ($rating->rating == 3) {
                $numberrating3++;
            } elseif ($rating->rating == 2) {
                $numberrating2++;
            } elseif ($rating->rating == 1) {
                $numberrating1++;
            }
        }

        return view('front.pages.room', compact('room', 'services', 'testimonials', 'rooms', 'ratings', 'ratingcount', 'numberrating1', 'numberrating2', 'numberrating3', 'numberrating4', 'numberrating5'));
    }

    public function index2()
    {
        $allrooms = Room::all();
        return view('back.pages.room.index', compact('allrooms'));
    }

    public function create()
    {
        $rooms = Room::all();
        $roomtypes = RoomType::all();
        $services = RoomService::all();
        $tags = Roomtags::all();


        return view('back.pages.room.create', compact('tags', 'services', 'roomtypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:rooms|max:255',
            'long_desc' => 'required',
            'long_desc2' => 'required',
            'roomtypes_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'max_guests' => 'required',
            'sofa_bed' => 'required',
            'king_bed' => 'required',
            'surface' => 'required',
            'src' => 'image | mimes:jpeg,png,jpg,gif',
        ]);

        $allrooms = Room::all();

        $store = new Room();
        $store->name = $request->name;
        $store->long_desc = $request->long_desc;
        $store->long_desc2 = $request->long_desc2;
        $store->roomtypes_id = $request->roomtypes_id;
        $store->surface = $request->surface;
        $store->king_bed = $request->king_bed;
        $store->sofa_bed = $request->sofa_bed;
        $store->max_guests = $request->max_guests;
        $store->price = $request->price;
        $store->discount = $request->discount;


        if ($allrooms->count() >= 24) {
            return redirect('/back/room/create')->with('warning', 'There are too many rooms');
        }

        $store->save();

        if ($request->hasFile('src')) {
            $newroomimg = new RoomImg();
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/room/', $filenametostore);
            $request->file('src')->storeAs('storage/room/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/room/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 780);
            $img->save();
            $newroomimg->src = $filenametostore;
            $newroomimg->room_id = $store->id;
            $newroomimg->save();
            $store->imgs()->attach($newroomimg->id);
        }


        $checked = $request->input('tag');
        $store->tags()->sync($checked);


        $checked2 = $request->input('services');
        $store->services()->sync($checked2);


        return redirect('/back/room/create')->with('success', 'room created successfully');
    }

    public function show($id)
    {
        $show = Room::find($id);
        $roomtypes = RoomType::all();
        $services = RoomService::all();
        $tags = Roomtags::all();
        return view('back.pages.room.show', compact('show', 'tags', 'services', 'roomtypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:rooms|max:255',
            'long_desc' => 'required',
            'long_desc2' => 'required',
            'roomtypes_id' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'max_guests' => 'required',
            'sofa_bed' => 'required',
            'king_bed' => 'required',
            'surface' => 'required',
            'src' => 'image | mimes:jpeg,png,jpg,gif | max:20018',
        ]);



        $update = Room::find($id);
        $update->name = $request->name;
        $update->long_desc = $request->long_desc;
        $update->long_desc2 = $request->long_desc2;
        $update->roomtypes_id = $request->roomtypes_id;
        $update->surface = $request->surface;
        $update->king_bed = $request->king_bed;
        $update->sofa_bed = $request->sofa_bed;
        $update->max_guests = $request->max_guests;
        $update->price = $request->price;
        $update->discount = $request->discount;

        $update->save();

        if ($request->hasFile('src')) {
            $newroomimg = new RoomImg();
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/room/', $filenametostore);
            $request->file('src')->storeAs('storage/room/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/room/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 780);
            $img->save();
            $newroomimg->src = $filenametostore;
            $newroomimg->room_id = $update->id;
            $newroomimg->save();
        }

        $update->imgs()->attach($newroomimg->id);

        $checked = $request->input('tag');
        $update->tags()->sync($checked);


        $checked2 = $request->input('services');
        $update->services()->sync($checked2);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Room::find($id);
        Storage::delete('storage/room/thumbnail/' . $todelete->src);
        Storage::delete('storage/room/' . $todelete->src);
        $todelete->delete();
        return redirect('/back/room/create')->with('warning', 'room deleted successfully');
    }
}
