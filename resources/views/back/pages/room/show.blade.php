@extends('back.layouts.index')
@section('content')
    <form action="/back/room/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="grid" class="">Room imgs</label>
            <div class="grid grid-cols-5 gap-5 my-5">
                @foreach ($images as $image)
                    <div class="w-1/4"><img src="{{ asset('storage/rooms/' . $image->src) }}"></div>
                @endforeach
            </div>
            <label for="src" class="">Add an image</label>
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

        <div class="mb-6">
            @foreach ($services as $service)
                <label for="services" class="block mb-2 text-sm font-medium">services</label>
                <input type="number" step="0.1" min="0" max="0.9" class="focus:ring-0" id="services"
                    name="services" value="{{ $show->discount }}">
            @endforeach
        </div>


        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
