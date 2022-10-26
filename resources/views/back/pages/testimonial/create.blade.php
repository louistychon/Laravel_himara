@extends('back.layouts.index')
@section('content')
    <form action="/back/testimonials/create" method="post" enctype="multipart/form-data">
        @csrf
      
        <div class="mb-6">
            <label for="rooms_id" class="block mb-2 text-sm font-medium">Room</label>
            <select name="rooms_id" >
                @foreach ($rooms as $room)
                <option value="{{ $room->id }}"  >{{ $room->name }}</option>
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
