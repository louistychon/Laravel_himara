<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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
        $store->roles_id = $request->roles_id;
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
        $update->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $todelete = User::find($id);
        $todelete->delete();
        return redirect()->back();
    }
}
