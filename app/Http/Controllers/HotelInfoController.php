<?php

namespace App\Http\Controllers;

use App\Models\HotelInfo;
use App\Http\Requests\StoreHotelInfoRequest;
use App\Http\Requests\UpdateHotelInfoRequest;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HotelInfoController extends Controller
{

    public function index()
    {
        return view('back.pages.hotelinfo.show');
    }

    public function update(Request $request)
    {
        $update = HotelInfo::first();
        $update->address = $request->address;
        $update->phone = $request->phone;
        $update->website = $request->website;
        $update->coordinates_x = $request->coordinates_x;
        $update->coordinates_y = $request->coordinates_y;
        if ($request->hasFile('logo')) {
            //get filename with extension
            $filenamewithextension = $request->file('logo')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('logo')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('logo')->storeAs('storage/logo/', $filenametostore);
            $request->file('logo')->storeAs('storage/logo/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/logo/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(107, 22);
            $img->save();
            $update->logo = $filenametostore;
        }
        $update->save();
        return redirect()->back();
    }
}
