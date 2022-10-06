@extends('back.layouts.index')
@section('content')

<a href="{{route('servicescreate')}}"><button
    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New service</button></a>
    <div class="overflow-x-auto relative">
        <table class="entry">
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Short description
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Image
                    </th>
                    <th scope="col" class="py-3 px-6">
                       Caption
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
                @foreach ($allservices as $service)
                    <tr class="">
                        <td class="font-bold py-4 px-6">
                            {{ $service->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $service->short_desc }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $service->src }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $service->caption }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/back/services/{{ $service->id }}/show">
                                <button
                                    class="btn-logout font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/services/{{ $service->id }}/delete" method="post">
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
