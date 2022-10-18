@extends('back.layouts.index')
@section('content')
    <form action="/back/mails/create" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="Name" class="block mb-2 text-sm font-medium">Name</label>
            <input type="text" class="focus:ring-0" id="Name" name="name" placeholder="">
        </div>
        <div class="mb-6">
            <label for="short_desc" class="block mb-2 text-sm font-medium">Short
                description</label>
            <input type="text" class="focus:ring-0" id="short_desc" name="short_desc">
        </div>

        <div class="mb-6">
            <label for="caption" class="block mb-2 text-sm font-medium">Caption</label>
            <input type="text" class="focus:ring-0" id="caption" name="caption">
        </div>
        <label for="icon" class="block mb-2 text-sm font-medium dark:text-gray-400">Icon</label>
        <fieldset id="role" name="icon_id">
            <div class="flex">
                @foreach ($icons as $icon)
                    <div class="flex flex-col justify-between items-center m-auto">
                        <i class="{{ 'fa ' . $icon->src }}" class="ms-0"></i>
                        <input type="radio" value="{{ $icon->id }}" class="mt-2 focus:ring-0" name="icon_id">
                    </div>
                @endforeach
            </div>

        </fieldset>

        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium">Image</label>
            <input type="file" id="src" name="src" class="mt-4 border border-gray-300 form-control">
        </div>
        <button type="submit"
            class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm
            new</button>
    </form>
@endsection
