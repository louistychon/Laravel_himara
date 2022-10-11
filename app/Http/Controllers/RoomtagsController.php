<?php

namespace App\Http\Controllers;

use App\Models\Roomtags;
use App\Http\Requests\StoreRoomtagsRequest;
use App\Http\Requests\UpdateRoomtagsRequest;

class RoomtagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomtagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomtagsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomtags  $roomtags
     * @return \Illuminate\Http\Response
     */
    public function show(Roomtags $roomtags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomtags  $roomtags
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomtags $roomtags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomtagsRequest  $request
     * @param  \App\Models\Roomtags  $roomtags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomtagsRequest $request, Roomtags $roomtags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomtags  $roomtags
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomtags $roomtags)
    {
        //
    }
}
