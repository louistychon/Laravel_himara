@extends('back.layouts.index')
@section('content')
    <form action="/back/blog/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="src" class="">Image</label>
            <input type="file" id="src" name="src" class="mt-4">
        </div>
        <div class="mb-6">
            <label for="title" class="">Title</label>
            <input type="text" id="title" name="title" class="mt-4">
        </div>
        <div class="mb-6 flex flex-col">
            <label for="long_desc" class="">Long description</label>
            <textarea rows="25" id="long_desc" name="long_desc" class="mt-4"> </textarea>
        </div>
        <div class="mb-6">
            <label for="category" class="">Category</label>
            <select name="categorie_id" class="flex justify-between mt-4 focus:ring-0" id="category">
                @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-6 w-1/3">
            <label for="tags" class="">Tags</label>
            <hr class="my-5">
            @foreach ($tags as $tag)
                <div class="flex justify-between">
                    <label>{{ $tag->name }}</label>
                    <input type="checkbox" name="tag" value={{$tag->id}}>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm
            new</button>
    </form>
@endsection
