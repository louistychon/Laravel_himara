@extends('back.layouts.index')
@section('content')
    <form action="/back/testimonials/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="users_id" class="block mb-2 text-sm font-medium">User</label>
        <select name="users_id" id="users_id">
            @foreach ($users as $user)

                    <option value="{{ $user->id }}" name="users_id" >{{ $user->name }}</option>
            @endforeach
        </select>
        </div>

        <div class="mb-6">
            <label for="rating" class="block mb-2 text-sm font-medium">rating</label>
            <input type="number" id="rating" min="0" max="5" name="rating" class="focus:ring-0">
        </div>

        <div class="mb-6">
            <label for="text" class="block mb-2 text-sm font-medium">Text</label>
            <textarea class="focus:ring-0" id="text" name="text" rows="15" cols="100"></textarea>
        </div>
        <button type="submit" class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 my-2">Confirm
            new</button>
    </form>
@endsection
