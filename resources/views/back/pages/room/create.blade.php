@extends('back.layouts.index')
@section('content')
    <form action="/back/room/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium">Image (expected: 1920 x 1200px)</label>
            <input type="file" class="focus:ring-0" id="src" name="src">
        </div>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium">name</label>
            <input type="text" class="focus:ring-0" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-6">
            <label for="room_type" class="block mb-2 text-sm font-medium">Room type</label>
            <select name="roomtypes_id" class="focus:ring-0" id="room_type">
                @foreach ($roomtypes as $roomtype)
                        <option id="room_type" name="roomtypes_id" class="focus:ring-0" value="{{ $roomtype->id }}">{{ $roomtype->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="long_desc" class="block mb-2 text-sm font-medium">Long description 1</label>
            <textarea class="focus:ring-0" cols="75" rows="25" id="long_desc" name="long_desc" value="{{ old('long_desc') }}"></textarea>
        </div>
        <div class="mb-6">
            <label for="long_desc2" class="block mb-2 text-sm font-medium">Long description 2</label>
            <textarea class="focus:ring-0" cols="75" rows="25" id="long_desc2" name="long_desc2" value="{{ old('long_desc2') }}"></textarea>
        </div>
        <div class="mb-6">
            <label for="surface" class="block mb-2 text-sm font-medium">Room size</label>
            <input type="number" id="surface" name="surface" class="focus:ring-0" value="{{ old('surface') }}"  >
        </div>
        <div class="mb-6">
            <label for="king_bed" class="block mb-2 text-sm font-medium">King beds</label>
            <input type="number" id="king_bed" name="king_bed" min="0" max="10" class="focus:ring-0" value="{{ old('king_bed') }}">
        </div>

        <div class="mb-6">
            <label for="sofa_bed" class="block mb-2 text-sm font-medium">Sofa beds</label>
            <input type="number" id="sofa_bed" name="sofa_bed" min="0" max="10" class="focus:ring-0" value="{{ old('sofa_bed') }}">
        </div>

        <div class="mb-6">
            <label for="max_guests" class="block mb-2 text-sm font-medium">Max guests</label>
            <input type="number" id="max_guests" name="max_guests" class="focus:ring-0" value="{{ old('max_guests') }}">
        </div>

        <div class="mb-6 flex flex-col justify-between">
            @foreach ($services as $service)
                <div class="flex justify-between w-1/3">
                    <label class="block mb-2 text-sm font-medium">{{ $service->name }}</label>
                    <input type="checkbox" name="services[]" value="{{ $service->id }}">
                </div>
            @endforeach
        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium">Price (before discount)</label>
            <input type="number" min="0" class="focus:ring-0" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="mb-6">
            <label for="discount" class="block text-sm font-medium mt-4">Discount</label>
            <input type="number" step="0.01" min="0" max="1"  id="discount" name="discount" value="{{ old('discount') }}" class="focus:ring-0 mt-4 border border-gray-300 form-control">
        </div>

        <div class="mb-6 flex flex-col justify-between">
            @foreach ($tags as $tag)
            <div class="flex justify-between w-1/3">
                <label class="block mb-2 text-sm font-medium">{{ $tag->name }}</label>
                <input type="checkbox" name="tag[]" value="{{ $tag->id }}">
            </div>
            @endforeach
        </div>

        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm
            new</button>
    </form>
@endsection
