@extends('back.layouts.index')
@section('content')
    <form action="/back/services/{{$show->id}}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"><i class="fa flaticon-add"></i>Name</label>
            <input type="text" id="Name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="" value="{{$show->name}}">
        </div>
        <div class="mb-6">
            <label for="short_desc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Short description</label>
            <input type="text" id="short_desc" name="short_desc"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$show->short_desc}}">
        </div>

        <div class="mb-6">
            <label for="caption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Caption</label>
            <input type="text" id="caption" name="caption"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$show->caption}}">
        </div>
        <label for="icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role</label>
            <fieldset id="role" name="icon_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">



            @foreach ($icons as $icon )
                <i class="{{"fa " . $icon->src}}"></i>
                <input type="radio" value={{$icon->id}}>
            @endforeach

        </fieldset>

        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image</label>
        <div class="w-1/2 mt-4"><img src="{{asset('storage/services/'. $show->src)}}" class="rounded-lg"></div>
            <input type="file" id="src" name="src"
                class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <button type="submit"
            class="text-white p-3 rounded-lg mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm modifications</button>
    </form>
@endsection