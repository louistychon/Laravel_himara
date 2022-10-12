@extends('back.layouts.index')
@section('content')
    <form action="/back/room/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium">name</label>
            <input type="text" class="focus:ring-0" id="name" name="name">
        </div>
        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium">text</label>
            <input type="text" class="focus:ring-0" id="text" name="text">
        </div>
        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium">price</label>
            <input type="number" step="0.01" min="0" max="500" class="focus:ring-0" id="price" name="price">
        </div>

        <div class="mb-6">
            <label for="discount" class="block text-sm font-medium mt-4">Discount</label>
            <input type="number" id="discount" name="discount" class="mt-4 border border-gray-300 form-control">
        </div>
        <div class="mb-6">
            <label for="src" class="block text-sm font-medium mt-4">Images (expected: 1920 x 1200px)</label>
            <input type="file" id="src" name="src" class="mt-4 border border-gray-300 form-control">
        </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm
            new</button>
    </form>
@endsection
