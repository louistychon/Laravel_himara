@extends('back.layouts.index')
@section('content')
    <form action="/back/hotelinfo/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mb-6">
            @foreach ($hotelinfo as $info)
            <label for="welcome_top" class="block mb-2 text-sm font-medium">Welcome topbar</label>
            <input type="text" id="welcome_top" name="welcome_top" class="focus:ring-0"
                value="{{ $info->welcome_top}}">
                @endforeach
        </div>
        <div class="mb-6">
            <label for="src" class="">Logo (expected 107x22px)</label>
            @foreach ($hotelinfo as $info)
                <div class="w-1/2 mt-4"><img src="{{ asset('storage/logo/thumbnail/' . $info->logo) }}" class=""></div>
            @endforeach
            <input type="file" id="src" name="logo" class="mt-4">
        </div>
        <div class="mb-6">
            <label for="logo_square" class="">Logo square (expected 75x103px)</label>
            @foreach ($hotelinfo as $info)
                <div class="w-1/2 mt-4"><img src="{{ asset('storage/logo/thumbnail/' . $info->logo_square) }}" class=""></div>
            @endforeach
            <input type="file" id="logo_square" name="logo_square" class="mt-4">

        @foreach ($hotelinfo as $info)
            <div class="mb-6">
                <label for="address" class="block mb-2 text-sm font-medium">Address</label>
                <input type="text" id="address" name="address" class="focus:ring-0" value="{{ $info->address }}">
            </div>
            <div class="mb-6">
                <label for="phone" class="block mb-2 text-sm font-medium">Phone</label>
                <input type="text" id="phone" name="phone" class="focus:ring-0" value="{{ $info->phone }}">
            </div>
            <div class="mb-6">
                <label for="website" class="block mb-2 text-sm font-medium">Website</label>
                <input type="text" id="website" name="website" class="focus:ring-0" value="{{ $info->website }}">
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" class="focus:ring-0" value="{{ $info->email }}">
            </div>

            <div class="mb-6">
                <label for="coordinates_x" class="block mb-2 text-sm font-medium">Coordinates X</label>
                <input type="text" id="coordinates_x" name="coordinates_x" class="focus:ring-0" value="{{ $info->coordinates_x }}">
            </div>

            <div class="mb-6">
                <label for="coordinates_y" class="block mb-2 text-sm font-medium">Coordinates Y</label>
                <input type="text" id="coordinates_y" name="coordinates_y" class="focus:ring-0" value="{{ $info->coordinates_y }}">
            </div>
        @endforeach
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </div>
    </form>
@endsection
