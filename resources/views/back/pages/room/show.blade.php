@extends('back.layouts.index')
@section('content')
    <form action="/back/room/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="grid" class="">Room imgs</label>
            <div class="grid grid-cols-5 gap-5 my-5">
                @foreach ($show->imgs as $image)
                    <div class="w-1/2"><img src="{{ asset('storage/room/thumbnail/' . $image->src) }}"></div>
                @endforeach
            </div>
            <label for="src" class="">Add an image (expected: 1920 x 1200px)</label>
            <input type="file" id="src" name="src" class="mt-4">
        </div>

        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium">Name</label>
            <input type="text" id="name" name="name" class="focus:ring-0" value="{{ $show->name }}">
        </div>

        <div class="mb-6">
            <label for="room_type" class="block mb-2 text-sm font-medium">Room type</label>
            <select name="roomtypes_id" class="focus:ring-0" id="room_type">
                @foreach ($roomtypes as $roomtype)
                    @if ($roomtype->id == $show->type->id)
                        <option id="room_type" name="roomtypes_id" class="focus:ring-0" value="{{ $show->type->id }}"
                            selected>{{ $show->type->name }}</option>
                    @else
                        <option id="room_type" name="roomtypes_id" class="focus:ring-0" value="{{ $roomtype->id }}"
                            selected>{{ $roomtype->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="surface" class="block mb-2 text-sm font-medium">Room size</label>
            <input type="number" id="surface" name="surface" class="focus:ring-0" value="{{ $show->surface}}">
        </div>
        <div class="mb-6">
            <label for="king_bed" class="block mb-2 text-sm font-medium">King beds</label>
            <input type="number" id="king_bed" name="king_bed" class="focus:ring-0" value="{{ $show->king_bed }}">
        </div>

        <div class="mb-6">
            <label for="sofa_bed" class="block mb-2 text-sm font-medium">Sofa beds</label>
            <input type="number" id="sofa_bed" name="sofa_bed" class="focus:ring-0" value="{{ $show->sofa_bed }}">
        </div>

        <div class="mb-6">
            <label for="max_guests" class="block mb-2 text-sm font-medium">Max guests</label>
            <input type="text" id="max_guests" name="max_guests" class="focus:ring-0" value="{{ $show->max_guests }}">
        </div>


        <div class="mb-6">
            <label for="long_desc" class="block mb-2 text-sm font-medium">Text</label>
            <textarea cols="75" rows="25" id="long_desc" name="long_desc" class="focus:ring-0">{{ $show->long_desc }}</textarea>
        </div>
        <div class="mb-6">
            <label for="long_desc2" class="block mb-2 text-sm font-medium">Text</label>
            <textarea cols="75" rows="25" id="long_desc2" name="long_desc2" class="focus:ring-0">{{ $show->long_desc2 }}</textarea>
        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium">Price (before discount)</label>
            <input type="number" class="focus:ring-0" id="price"
                name="price" value="{{ $show->price }}">
        </div>
        <div class="mb-6 flex flex-col justify-between">
            @foreach ($tags as $tag)
            <div class="flex justify-between w-1/3">
                <label class="block mb-2 text-sm font-medium">{{ $tag->name }}</label>
                <input type="checkbox" name="tag[]" value="{{ $tag->id }}"  @if ($show->tags->contains($tag->id)) checked @endif>
            </div>
            @endforeach
        </div>
        <div class="mb-6">
            <label for="discount" class="block mb-2 text-sm font-medium">Discount</label>
            <input type="number" step="0.1" min="0" max="0.9" class="focus:ring-0" id="discount"
            name="discount" value="{{ $show->discount }}">
        </div>

        <div class="mb-6 flex flex-col justify-between">
            @foreach ($services as $service)
                <div class="flex justify-between w-1/3">
                    <label class="block mb-2 text-sm font-medium">{{ $service->name }}</label>
                    <input type="checkbox" name="services[]" value="{{ $service->id }}"
                        @if ($show->services->contains($service->id)) checked @endif>
                </div>
            @endforeach
        </div>

        @can('isModerator')
        <div class="mb-6">
            <label for="show" class="block mb-2 text-sm font-medium">Validated ? </label>
            <input type="checkbox" class="focus:ring-0" id="show"
            name="show" value="{{ $show->show }}" @if($show->show == 1) checked @endif>
        </div>
        @endcan


        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
