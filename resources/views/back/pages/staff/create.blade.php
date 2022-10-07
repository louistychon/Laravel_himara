@extends('back.layouts.index')
@section('content')
    <form action="/back/staff/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="src" class="">Image (expected:540x540px) </label>
            <input type="file" id="src" name="src" class="mt-4">
        </div>

        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium">Name</label>
            <input type="text" id="name" name="name" class="focus:ring-0">
        </div>

        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium">Title</label>
            <input type="title" id="title" name="title" class="focus:ring-0">
        </div>

        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium">Text</label>
            <input type="text" class="focus:ring-0" id="text" name="text">
        </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm
            new</button>
    </form>
@endsection
