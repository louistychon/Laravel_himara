@extends('back.layouts.index')
@section('content')
    <form action="/back/services/create" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="Name" class="block mb-2 text-sm font-medium">Name</label>
            <input type="text" id="Name" name="name" placeholder="">
        </div>
        <div class="mb-6">
            <label for="short_desc" class="block mb-2 text-sm font-medium">Short
                description</label>
            <input type="text" id="short_desc" name="short_desc">
        </div>

        <div class="mb-6">
            <label for="caption" class="block mb-2 text-sm font-medium">Caption</label>
            <input type="text" id="caption" name="caption">
        </div>
        <label for="icon" class="block mb-2 text-sm font-medium dark:text-gray-400">Icon</label>
        <fieldset id="role" name="icon_id">
            <div class="flex">
                @foreach ($icons as $icon)
                    <div class="flex flex-col justify-between items-center m-auto">
                        <i class="{{ 'fa ' . $icon->src }}" class="ms-0"></i>
                        <input type="radio" value="{{ $icon->id }}" class="mt-2" name="icon_id">
                    </div>
                @endforeach
            </div>

        </fieldset>

        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium">Image</label>
            <input type="file" id="src" name="src" class="mt-4 border border-gray-300 form-control">
        </div>
        <button type="submit"
            class="text-white p-3 rounded-lg mt-4 bg-blue-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Confirm
            new</button>
    </form>
@endsection
