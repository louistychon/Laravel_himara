@extends('back.layouts.index')
@section('content')
    <form action="/mail/{{$show->id}}/delete" method="post" enctype="multipart/form-data">
        @csrf
        @method('delete')
        <div class="mb-6">
            <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
            <input type="text" id="Name" name="name" class="focus:ring-0" placeholder="" value="{{ $show->name }}">
        </div>
        <div class="mb-6">
            <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
            <input type="text" id="Email" name="Email" class="focus:ring-0" placeholder="" value="{{ $show->email }}">
        </div>

        <div class="mb-6">
            <label for="short_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Message</label>
            <input type="text" id="short_desc" name="short_desc" class="focus:ring-0" value="{{ $show->message }}">
        </div>
        <button type="submit"
        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Delete</button>
    </form>
@endsection
