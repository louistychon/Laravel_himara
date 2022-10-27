<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Staffroles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isModerator'])->except(['index']);
    }

    public function index()
    {

        $showceo = Staff::all()->where('id', '=', 1);
        $ceo = [1];
        $allstaff = Staff::inRandomOrder()->whereNotIn('id', $ceo)->take(7)->get();
        return view('front.pages.staff', compact('ceo','allstaff', 'showceo'));
    }

    public function index2()
    {
        $allstaff = Staff::all();
        return view('back.pages.staff.index', compact('allstaff'));
    }

    public function create()
    {
        $staffroles = Staffroles::all();
        return view('back.pages.staff.create', compact('staffroles'));
    }


    public function store(Request $request)
    {
            $store = new Staff();
            $store->name = $request->name;
            $store->title = $request->title;
            $store->text = $request->text;

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
                $request->file('src')->storeAs('storage/staff/', $filenametostore);
                $request->file('src')->storeAs('storage/staff/thumbnail/', $filenametostore);
                //Resize image here
                $thumbnailpath = public_path('storage/staff/thumbnail/' . $filenametostore);
                $img = Image::make($thumbnailpath)->resize(540, 540);
                $img->save();
                $store->src = $filenametostore;
            }
            $store->save();
            return redirect()->back();
        }

    public function show($id)
    {
        $staffroles = Staffroles::all();
        $show = Staff::find($id);
        return view('back.pages.staff.show', compact('show', 'staffroles'));
    }

    public function update(Request $request, $id)
    {
        $update = Staff::find($id);
        $update->name = $request->name;
        $update->title = $request->title;
        $update->text = $request->text;

        if ($request->hasFile('src')) {
            Storage::delete('storage/staff/thumbnail/' . $update->src);
            Storage::delete('storage/staff/' . $update->src);
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/staff/', $filenametostore);
            $request->file('src')->storeAs('storage/staff/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/staff/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(540, 540);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = Staff::find($id);
        Storage::delete('storage/staff/thumbnail/' . $todelete->src);
        Storage::delete('storage/staff/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
