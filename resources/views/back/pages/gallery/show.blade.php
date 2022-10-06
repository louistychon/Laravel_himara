@extends('back.layouts.index')
@section('content')
    <form action="/back/gallery/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="src" class="">Image</label>
            <div class="w-1/2 mt-4"><img src="{{ asset('storage/gallery/thumbnail/' . $show->src) }}" class="rounded-lg"></div>
            <input type="file" id="src" name="src" class="mt-4">
        </div>

        <div class="mb-6">
            <label for="caption" class="block mb-2 text-sm font-medium">Caption</label>
            <input type="text" id="caption" name="caption" class="focus:ring-0" value="{{ $show->caption }}">
        </div>
        <div class="mb-6">
        <label for="filter" class="block mb-2 text-sm font-medium text-gray-900 ">Filter</label>
        <select name="filtergalleries_id" id="filter">
            @foreach ($filters as $filter)
                @if ($show->filtergalleries_id == $filter->id)
                    <option value="{{ $filter->id }}" name="filtergalleries_id" selected>{{ $filter->name }}</option>
                @else
                    <option value="{{ $filter->id }}" name="filtergalleries_id" >{{ $filter->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
