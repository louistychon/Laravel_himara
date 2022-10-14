@extends('back.layouts.index')
@section('content')

<a href="{{route('roomcreate')}}"><button
    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New room</button></a>
    <div class="overflow-x-auto relative">
        <table>
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Image
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Text
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Price
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Discount
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allrooms as $rooms)
                    <tr class="">
                        <td class="py-4 px-6 grid grid-cols-5">
                            @foreach ($rooms->imgs as $images)
                                <img src="{{asset('storage/room/thumbnail/'. $images->src)}}">
                            @endforeach
                        </td>
                        <td class="py-4 px-6">
                            {{ $rooms->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $rooms->text }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $rooms->price}}€
                        </td>
                        <td class="py-4 px-6">
                            {{ round((float)$rooms->discount * 100 ) . '%';}}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/back/room/{{ $rooms->id }}/show">
                                <button
                                    class="btn-logout font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/room/{{ $rooms->id }}/delete" method="post">
                                @csrf
                                @method('delete')
                               <button type="submit"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
