<?php

namespace App\Http\Controllers;

use App\Models\GalleryImg;
use App\Http\Requests\StoreGalleryImgRequest;
use App\Http\Requests\UpdateGalleryImgRequest;
use App\Models\filtergallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GalleryImgController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator'])->except(['index']);
    }

    public function index(){
        $allimgs = GalleryImg::all();
        return view('front.pages.gallery', compact('allimgs'));
    }

    public function index2(){
        $allimgs = GalleryImg::all();
        return view('back.pages.gallery.index', compact('allimgs'));
    }


    public function create()
    {
        $filters = filtergallery::all();
        return view('back.pages.gallery.create', compact('filters'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required',
            'filtergalleries_id' => 'required|integer',
            'src' => 'image | mimes:jpeg,png,jpg,gif',
        ]);


            $store = new GalleryImg();
            $store->caption = $request->caption;
            $store->filtergalleries_id = $request->filtergalleries_id;

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
                $request->file('src')->storeAs('storage/gallery/', $filenametostore);
                $request->file('src')->storeAs('storage/gallery/thumbnail/', $filenametostore);
                //Resize image here
                $thumbnailpath = public_path('storage/gallery/thumbnail/' . $filenametostore);
                $img = Image::make($thumbnailpath)->resize(600, 800);
                $img->save();
                $store->src = $filenametostore;
            }

            $store->save();
            return redirect()->back();
    }

    public function show($id)
    {
        $filters = filtergallery::all();
        $show = GalleryImg::find($id);
        return view('back.pages.gallery.show', compact('show', 'filters'));
    }

    public function update(Request $request, $id)
    {
        $update = GalleryImg::find($id);
        $update->caption = $request->caption;
        $update->filtergalleries_id = $request->filtergalleries_id;

        if ($request->hasFile('src')) {
            Storage::delete('storage/gallery/thumbnail/' . $update->src);
            Storage::delete('storage/gallery/' . $update->src);
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/gallery/', $filenametostore);
            $request->file('src')->storeAs('storage/gallery/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/gallery/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(600, 800);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = GalleryImg::find($id);
        Storage::delete('storage/gallery/thumbnail/' . $todelete->src);
        Storage::delete('storage/gallery/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
