<?php

namespace App\Http\Controllers;

use App\Models\GalleryImg;
use App\Http\Requests\StoreGalleryImgRequest;
use App\Http\Requests\UpdateGalleryImgRequest;

class GalleryImgController extends Controller
{

    public function index(){
        return view('front.pages.gallery');
    }


    public function create()
    {
        //
    }


    public function store(StoreGalleryImgRequest $request)
    {
        //
    }


    public function show(GalleryImg $galleryImg)
    {
        //
    }


    public function edit(GalleryImg $galleryImg)
    {
        //
    }


    public function update(UpdateGalleryImgRequest $request, GalleryImg $galleryImg)
    {
        //
    }

    
    public function destroy(GalleryImg $galleryImg)
    {
        //
    }
}
