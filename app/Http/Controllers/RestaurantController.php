<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class RestaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $alldishes = Dish::all();
        return view('back.pages.restaurant.index', compact('alldishes'));
    }


    public function create()
    {
        return view('back.pages.restaurant.create');
    }

    public function store(Request $request)
    {
            $store = new Dish();
            $store->name = $request->name;
            $store->text = $request->text;
            $store->price = $request->price;

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
                $request->file('src')->storeAs('storage/dishes/', $filenametostore);
                $request->file('src')->storeAs('storage/dishes/thumbnail/', $filenametostore);
                //Resize image here
                $thumbnailpath = public_path('storage/dishes/thumbnail/' . $filenametostore);
                $img = Image::make($thumbnailpath)->resize(640, 423);
                $img->save();
                $store->src = $filenametostore;
            }

            $store->save();
            return redirect()->back();
    }

    public function show($id)
    {
        $show = Dish::find($id);
        return view('back.pages.restaurant.show', compact('show'));
    }

    public function update(Request $request, $id)
    {
        $update = Dish::find($id);
        $update->name = $request->name;
        $update->text = $request->text;
        $update->price = $request->price;

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
            $request->file('src')->storeAs('storage/dishes/', $filenametostore);
            $request->file('src')->storeAs('storage/dishes/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/dishes/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(640, 423);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Dish::find($id);
        Storage::delete('storage/dishes/thumbnail/' . $todelete->src);
        Storage::delete('storage/dishes/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
