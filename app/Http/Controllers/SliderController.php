<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    public function index()
    {
        $allslider = Slider::all();
        return view('back.pages.slider.index', compact('allslider'));
    }

    public function create()
    {

        return view('back.pages.slider.create');
    }


    public function store(Request $request)
    {
        $store = new Slider();
        $store->header_stars = $request->header_stars;
        $store->number_stars = $request->number_stars;
        $store->title = $request->title;
        $store->slogan = $request->slogan;
        $store->button1_text = $request->button1_text;
        $store->button2_text = $request->button2_text;

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
            $request->file('src')->storeAs('storage/slider/', $filenametostore);
            $request->file('src')->storeAs('storage/slider/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/slider/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1920, 1280);
            $img->save();
        }
        $store->src = $filenametostore;
        $store->save();
        return redirect()->back();
    }


    public function show($id)
    {
        $slides = Slider::all();
        $show = Slider::find($id);
        return view('back.pages.slider.show', compact('show', 'slides'));
    }

    public function edit()
    {
    }

    public function update(Request $request, $id)
    {
        $update = Slider::find($id);
        $update->header_stars = $request->header_stars;
        $update->number_stars = $request->number_stars;
        $update->slogan = $request->slogan;
        $update->button1_text = $request->button1_text;
        $update->button2_text = $request->button2_text;
        $update->place = $request->place;

        if ($request->hasFile('src')) {
            Storage::delete('storage/slider/thumbnail/' . $update->src);
            Storage::delete('storage/slider/' . $update->src);
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/slider/', $filenametostore);
            $request->file('src')->storeAs('storage/slider/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/slider/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 750);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Slider::find($id);
        Storage::delete('storage/slider/thumbnail/' . $todelete->src);
        Storage::delete('storage/slider/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
