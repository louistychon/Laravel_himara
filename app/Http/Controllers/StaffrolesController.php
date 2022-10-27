<?php

namespace App\Http\Controllers;

use App\Models\Staffroles;
use App\Http\Requests\StoreStaffrolesRequest;
use App\Http\Requests\UpdateStaffrolesRequest;

class StaffrolesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator']);
    }

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
     * @param  \App\Http\Requests\StoreStaffrolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffrolesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staffroles  $staffroles
     * @return \Illuminate\Http\Response
     */
    public function show(Staffroles $staffroles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staffroles  $staffroles
     * @return \Illuminate\Http\Response
     */
    public function edit(Staffroles $staffroles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffrolesRequest  $request
     * @param  \App\Models\Staffroles  $staffroles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffrolesRequest $request, Staffroles $staffroles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staffroles  $staffroles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staffroles $staffroles)
    {
        //
    }
}
