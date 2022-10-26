@extends('back.layouts.index')
@section('content')
    <form action="/back/gallery/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="src" class="">Image</label>
            <input type="file" id="src" name="src" class="mt-4">
        </div>

        <div class="mb-6">
            <label for="caption" class="block mb-2 text-sm font-medium">Caption</label>
            <input type="text" id="caption" name="caption" class="focus:ring-0">
        </div>
        <div class="mb-6">
        <label for="filter" class="block mb-2 text-sm font-medium text-gray-900 ">Filter</label>
        <select name="filtergalleries_id" id="filter">
            @foreach ($filters as $filter)
                    <option value="{{ $filter->id }}" name="filtergalleries_id" >{{ $filter->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm
            new</button>
    </form>
@endsection
