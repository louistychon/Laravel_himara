<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Icon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator']);
    }

    public function index()
    {
        $allservices = Service::all();
        return view('back.pages.services.index', compact('allservices'));
    }

    public function create()
    {
        $icons = Icon::all();
        return view('back.pages.services.create', compact('icons'));
    }


    public function store(Request $request)
    {
        $all = Service::all()->count();
        if ($all >= 4) {
            return redirect('/back/services')->with('warning', 'there are already 4 services, please delete one of them before updating');
        } else {
            $store = new Service();
            $store->name = $request->name;
            $store->short_desc = $request->short_desc;
            $store->caption = $request->caption;
            $store->icon_id = $request->icon_id;


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
                $request->file('src')->storeAs('storage/services/', $filenametostore);
                $request->file('src')->storeAs('storage/services/thumbnail/', $filenametostore);
                //Resize image here
                $thumbnailpath = public_path('storage/services/thumbnail/' . $filenametostore);
                $img = Image::make($thumbnailpath)->resize(1170, 750);
                $img->save();
                $store->src = $filenametostore;
            }
            $store->save();
            return redirect()->back();
        }
    }

    public function show($id)
    {
        $icons = Icon::all();
        $show = Service::find($id);
        return view('back.pages.services.show', compact('show', 'icons'));
    }

    public function update(Request $request, $id)
    {
        $update = Service::find($id);
        $update->name = $request->name;
        $update->short_desc = $request->short_desc;
        $update->caption = $request->caption;
        $update->icon_id = $request->icon_id;

        if ($request->hasFile('src')) {
            Storage::delete('storage/services/thumbnail/' . $update->src);
            Storage::delete('storage/services/' . $update->src);
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/services/', $filenametostore);
            $request->file('src')->storeAs('storage/services/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/services/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(1170, 750);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Service::find($id);
        Storage::delete('storage/services/thumbnail/' . $todelete->src);
        Storage::delete('storage/services/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
