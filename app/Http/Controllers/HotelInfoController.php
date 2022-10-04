<?php

namespace App\Http\Controllers;

use App\Models\HotelInfo;
use App\Http\Requests\StoreHotelInfoRequest;
use App\Http\Requests\UpdateHotelInfoRequest;

class HotelInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreHotelInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotelInfo  $hotelInfo
     * @return \Illuminate\Http\Response
     */
    public function show(HotelInfo $hotelInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelInfo  $hotelInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelInfo $hotelInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelInfoRequest  $request
     * @param  \App\Models\HotelInfo  $hotelInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelInfoRequest $request, HotelInfo $hotelInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelInfo  $hotelInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelInfo $hotelInfo)
    {
        //
    }
}
