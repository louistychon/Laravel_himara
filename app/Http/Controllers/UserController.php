<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allusers = User::all();
        return view('back.pages.users.index', compact('allusers'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('back.pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $store = new User;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->country = $request->country;
        $store->city = $request->city;
        $store->password = Hash::make($request->password);
        $store->roles_id = 4;

        if ($request->hasFile('src')) {
            Storage::delete('storage/users/thumbnail/' . $store->src);
            Storage::delete('storage/users/' . $store->src);
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/users/', $filenametostore);
            $request->file('src')->storeAs('storage/users/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/users/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(500,500);
            $img->save();
            $store->src = $filenametostore;
        }

        $store->save();
        return redirect()->back();
    }


    public function show($id)
    {
        $show = User::find($id);
        $roles = Role::all();
        return view('back.pages.users.show', compact('show', 'roles'));
    }

    public function edit()
    {
        $allusers = User::all();
        return view('back.pages.users.edit', compact('allusers'));
    }

    public function update(Request $request, $id)
    {
        $update = User::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->country = $request->country;
        $update->city = $request->city;
        $update->roles_id = $request->roles_id;

        if ($request->hasFile('src')) {
            Storage::delete('storage/users/thumbnail/' . $update->src);
            Storage::delete('storage/users/' . $update->src);
            //get filename with extension
            $filenamewithextension = $request->file('src')->getClientOriginalName();
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file('src')->getClientOriginalExtension();
            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            //Upload File
            $request->file('src')->storeAs('storage/users/', $filenametostore);
            $request->file('src')->storeAs('storage/users/thumbnail/', $filenametostore);
            //Resize image here
            $thumbnailpath = public_path('storage/users/thumbnail/' . $filenametostore);
            $img = Image::make($thumbnailpath)->resize(500,500);
            $img->save();
            $update->src = $filenametostore;
        }

        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = User::find($id);
        Storage::delete('storage/users/thumbnail/' . $todelete->src);
        Storage::delete('storage/users/' . $todelete->src);
        $todelete->delete();
        return redirect()->back();
    }
}
