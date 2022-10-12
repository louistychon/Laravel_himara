@extends('back.layouts.index')
@section('content')
    <form action="/back/room/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="grid" class="">Room imgs</label>
            <div class="grid grid-cols-5 gap-5 my-5">
                @foreach ($show->imgs as $image)
                    <div class="w-1/4"><img src="{{ asset('storage/rooms/' . $image->src) }}"></div>
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
            <label for="text" class="block mb-2 text-sm font-medium">Text</label>
            <input type="text" id="text" name="text" class="focus:ring-0" value="{{ $show->text }}">
        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium">Price (before discount)</label>
            <input type="number" step="0.01" min="0" max="500" class="focus:ring-0" id="price"
                name="price" value="{{ $show->price }}">
        </div>
        <div class="mb-6">
            <label for="discount" class="block mb-2 text-sm font-medium">Discount</label>
            <input type="number" step="0.1" min="0" max="0.9" class="focus:ring-0" id="discount"
                name="discount" value="{{ $show->discount }}">
        </div>
        <div class="mb-6">
            <label for="checktags" class="block mb-2 text-sm font-medium">Tags</label>
            @foreach ($tags as $tag)
                <label class="block mb-2 text-sm font-medium">{{ $tag->name }}</label>
                <input type="checkbox" name="name" id="checktags" value="{{ $tag->id }}">
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
                <label class="block mb-2 text-sm font-medium">{{$service->name}}</label>
                <input type="checkbox" name="services[]" value="{{$service->id}}" @if($show->services->contains($service->id)) checked @endif>
            </div>
            @endforeach
        </div>


        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
