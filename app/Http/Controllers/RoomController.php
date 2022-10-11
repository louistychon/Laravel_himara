<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\RoomType;

class RoomController extends Controller
{

    public function indexall()
    {
        $allrooms = Room::all();
        $roomtypes = Room::withcount('roomtypes_id')->get();
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

    public function store(StoreRoomRequest $request)
    {
        //
    }

    public function show(Room $room)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
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
