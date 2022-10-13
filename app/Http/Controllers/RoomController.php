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
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RoomController extends Controller
{

    public function indexall()
    {
        $allrooms = Room::all();
        $roomtypes = RoomType::all();
        return view('front.pages.rooms-list', compact('allrooms', 'roomtypes'));
    }

    public function index()
    {
        $allrooms = Room::all();
        return view('front.pages.room', compact('allrooms'));
    }

    public function index2()
    {
        $allrooms = Room::all();
        return view('back.pages.room.index', compact('allrooms'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $update = Room::find($id);
        $update->name = $request->name;
        $update->long_desc = $request->long_desc;
        $update->roomtypes_id = $request->roomtypes_id;
        $update->surface = $request->surface;
        $update->king_bed = $request->king_bed;
        $update->sofa_bed = $request->sofa_bed;
        $update->max_guests = $request->max_guests;
        $update->price = $request->price;
        $update->discount = $request->discount;

        if ($request->hasFile('src')) {
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/blog/', $filenametostore);
            $request->file('src')->storeAs('storage/blog/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/blog/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 780);
            $img->save();
            $update->src = $filenametostore;
        }
        $update->save();

        $checked = $request->input('tag');
        $update->tags()->sync($checked);


        $checked2 = $request->input('services');
        $update->services()->sync($checked2);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
