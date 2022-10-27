@extends('back.layouts.index')
@section('content')
    <form action="/back/services/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
            <input type="text" id="Name" name="name" class="focus:ring-0" placeholder="" value="{{ $show->name }}">
        </div>

        <div class="mb-6">
            <label for="short_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Short
                description</label>
            <input type="text" id="short_desc" name="short_desc" class="focus:ring-0" value="{{ $show->short_desc }}">
        </div>

        <div class="mb-6">
            <label for="caption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Caption</label>
            <input type="text" id="caption" name="caption" class="focus:ring-0" value="{{ $show->caption }}">
        </div>

        <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Icon</label>
        <fieldset id="icon" name="icon_id" class="focus:ring-0">
            <div class="flex justify-between items-center m-auto">
                @foreach ($icons as $icon)
                @if ($show->icon_id == $icon->id)
                <div class="flex flex-col justify-between items-center">
                    <i class="{{ 'fa ' . $icon->src }}" class="ms-0"></i>
                    <input type="radio" class="mt-2 focus:ring-0" value="{{ $icon->id }}" name="icon_id" checked>
                </div>
                @else
                <div class="flex flex-col justify-between items-center">
                    <i class="{{ 'fa ' . $icon->src }}" class="ms-0"></i>
                    <input type="radio" class="mt-2 focus:ring-0" value="{{ $icon->id }}" name="icon_id">
                </div>
                @endif
            @endforeach
            </div>
        </fieldset>

        <div class="mb-6">
            <label for="src" class="">Image</label>
            <div class="w-1/2 mt-4"><img src="{{ asset('storage/services/thumbnail/' . $show->src) }}" class="rounded-lg"></div>
            <input type="file" id="src" name="src" class="mt-4">
        </div>

        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
