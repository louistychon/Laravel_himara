@extends('back.layouts.index')
@section('content')
    <form action="/back/slider/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium">Image</label>
            <div class="w-1/2 mt-4"><img src="{{ asset('storage/slider/thumbnail/' . $show->src) }}" class="rounded-lg"></div>
            <input type="file" id="src" name="src" class="mt-4 border border-gray-300 form-control" >
        </div>
        <div class="mb-6">
            <label for="header_stars" class="block mb-2 text-sm font-medium">Header star text</label>
            <input type="text" class="focus:ring-0" id="header_stars" name="header_stars" value="{{$show->header_stars}}">
        </div>
        <div class="mb-6">
            <label for="number_stars" class="block mb-2 text-sm font-medium">Number of stars</label>
            <input type="number" class="focus:ring-0" id="number_stars" name="number_stars" max="5" min="1" value="{{$show->number_stars}}">
        </div>
        <div class="mb-6">
            <label for="slogan" class="block mb-2 text-sm font-medium">Slogan</label>
            <input type="text" class="focus:ring-0" id="slogan" name="slogan" value="{{$show->slogan}}">
        </div>
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium">Title</label>
            <input type="text" class="focus:ring-0" id="title" name="title" value="{{$show->title}}">
        </div>

        <div class="mb-6">
            <label for="button1text" class="block mb-2 text-sm font-medium text-gray-900">Button1 text</label>
            <input type="text" class="focus:ring-0" id="button1text" name="button1_text" value="{{$show->button1_text}}">
        </div>

        <div class="mb-6">
            <label for="button2text" class="block mb-2 text-sm font-medium text-gray-900">Button2 text</label>
            <input type="text" class="focus:ring-0" id="button2text" name="button2_text" value="{{$show->button2_text}}">
        </div>

        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm</button>
    </form>
@endsection
