@extends('back.layouts.index')
@section('content')
    <form action="/back/restaurant/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="src" class="">Image</label>
            <div class="w-1/2 mt-4"><img src="{{ asset('storage/dishes/thumbnail/' . $show->src) }}" class="rounded-lg"></div>
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
            <label for="price" class="block mb-2 text-sm font-medium">price</label>
            <input type="number" step="0.01" min="0" max="500" class="focus:ring-0" id="price" name="price" value="{{ $show->price }}">
        </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
