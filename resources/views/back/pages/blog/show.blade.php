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
            <div class="flex flex-col">
                <label for="long_desc" class="">Long description</label>
                <textarea rows="25" id="long_desc" name="long_desc" class="mt-4">{{ $show->long_desc }}</textarea>
            </div>
        </div>
        <div class="mb-6">
            <label for="category" class="">Category</label>
            <select name="categorie_id" class="flex justify-between mt-4 focus:ring-0" id="category">
                @foreach ($categories as $category)
                    @if ($show->categorie_id == $category->id)
                        <option value="{{ $show->categorie_id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6 w-1/3">
            <label for="tags" class="">Tags</label>
            <hr class="my-5">
            @foreach ($show->tags as $tag)
                <div class="flex justify-between">
                    <label>{{ $tag->name }}</label>
                    <input type="checkbox" name="tag" value="{{ $tag->id }}"  @if($show->tags->contains($tags->id)) checked @endif>
                </div>
            @endforeach
        </div>
        <div class="mb-6">
            <label for="author" class="">User</label>
            <select name="users_id" class="flex justify-between mt-4 focus:ring-0" id="">
                @foreach ($users as $user)
                    @if ($user->id == $show->users->id)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                    @else
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label class="my-4">Comments</label>
            <div>
                @foreach ($comments as $comment)
                    <div class="flex flex-col justify-evenly">
                        <textarea class="focus:ring-0" name="" id="" cols="30" rows="10">{{ $comment->comment }}</textarea>
                        <button type="button" class="w-1/2 m-auto mt-4btn btn-logout p-2">Edit comment</button></a>
                    </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">Confirm modifications</button>
    </form>
@endsection
