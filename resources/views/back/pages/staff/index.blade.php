@extends('back.layouts.index')
@section('content')

<a href="{{route('staffcreate')}}"><button
    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New employee</button></a>
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
                        Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        text
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
                @foreach ($allstaff as $staff)
                    <tr class="">
                        <td class="py-4 px-6">
                            <img class="" src="{{asset('storage/staff/'. $staff->src)}}">
                        </td>
                        <td class="py-4 px-6">
                            {{ $staff->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $staff->title}}
                        </td>
                        <td class="py-4 px-6">
                            {{ $staff->text }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/back/staff/{{ $staff->id }}/show">
                                <button
                                    class="btn-logout font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/staff/{{ $staff->id }}/delete" method="post">
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
