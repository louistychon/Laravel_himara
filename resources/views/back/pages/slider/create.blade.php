@extends('back.layouts.index')
@section('content')
    <form action="/back/slider/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium">Image</label>
            <input type="file" id="src" name="src" class="mt-4 border border-gray-300 form-control">
        </div>
        <div class="mb-6">
            <label for="header_stars" class="block mb-2 text-sm font-medium">Header star text</label>
            <input type="text" class="focus:ring-0" id="header_stars" name="header_stars">
        </div>
        <div class="mb-6">
            <label for="number_stars" class="block mb-2 text-sm font-medium">Number of stars</label>
            <input type="number" class="focus:ring-0" id="number_stars" name="number_stars" max="5" min="1">
        </div>
        <div class="mb-6">
            <label for="slogan" class="block mb-2 text-sm font-medium">Slogan</label>
            <input type="text" class="focus:ring-0" id="slogan" name="slogan">
        </div>
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium">Title</label>
            <input type="text" class="focus:ring-0" id="title" name="title">
        </div>

        <div class="mb-6">
            <label for="button1text" class="block mb-2 text-sm font-medium text-gray-900">Button1 text</label>
            <input type="text" class="focus:ring-0" id="button1text" name="button1_text">
        </div>

        <div class="mb-6">
            <label for="button2text" class="block mb-2 text-sm font-medium text-gray-900">Button2 text</label>
            <input type="text" class="focus:ring-0" id="button2text" name="button2_text">
        </div>

        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm</button>
    </form>
@endsection
