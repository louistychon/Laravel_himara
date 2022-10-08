@extends('back.layouts.index')
@section('content')
    <form action="/back/blog/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="src" class="">Image</label>
            <div class="w-1/2 mt-4"><img src="{{ asset('storage/blog/thumbnail/' . $show->src) }}" class="rounded-lg"></div>
            <input type="file" id="src" name="src" class="mt-4">
        </div>
        <div class="mb-6">
            <label for="title" class="">Title</label>
            <input type="text" id="title" name="title" class="mt-4" value="{{ $show->title }}">
        </div>
        <div class="mb-6">
            <label for="text" class="">Text</label>
            <input type="text" id="text" name="text" class="mt-4" value="{{ $show->long_desc }}">
        </div>
        <div class="mb-6">
            <label for="category" class="">Category</label>
            <select name="categorie_id" id="category">
                @foreach ($categories as $category)
                    @if ($show->categorie_id == $category->id)
                        <option value="{{ $show->categorie_id }}" selected>{{ $show->category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6 w-1/3">
            <label for="tags" class="">Tags</label>
            <hr class="my-5">
            @foreach ($tags as $tag)
                {{-- @foreach ($show->tags as $tag) --}}
                    @if (dd($tag->id == $show->tags['id']))
                        <div class="flex justify-between">
                            <label>{{ $tag->name }}</label>
                            <input type="checkbox" checked />
                        </div>
                    @else
                        <div class="flex justify-between">
                            <label>{{ $tag->name }}</label>
                            <input type="checkbox" />
                        </div>
                    @endif
                {{-- @endforeach --}}
            @endforeach
        </div>

        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
