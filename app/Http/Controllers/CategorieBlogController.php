<?php

namespace App\Http\Controllers;

use App\Models\CategorieBlog;
use App\Http\Requests\StoreCategorieBlogRequest;
use App\Http\Requests\UpdateCategorieBlogRequest;

class CategorieBlogController extends Controller
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
     * @param  \App\Http\Requests\StoreCategorieBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorieBlog  $categorieBlog
     * @return \Illuminate\Http\Response
     */
    public function show(CategorieBlog $categorieBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorieBlog  $categorieBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorieBlog $categorieBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieBlogRequest  $request
     * @param  \App\Models\CategorieBlog  $categorieBlog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieBlogRequest $request, CategorieBlog $categorieBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorieBlog  $categorieBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorieBlog $categorieBlog)
    {
        //
    }
}
