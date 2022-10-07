@extends('back.layouts.index')
@section('content')

<a href="{{route('slidercreate')}}"><button type="button"
    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New slide</button></a>

    <div class="overflow-x-auto relative">
        <table class="">
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Image
                    </th>

                    <th scope="col" class="py-3 px-6">
                        Header star text
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Number of stars
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                       Slogan
                    </th>

                     <th scope="col" class="py-3 px-6">
                        Button1 text
                     </th>
                     <th scope="col" class="py-3 px-6">
                        Button2 text
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
                @foreach ($allslider as $slide)
                    <tr class="">
                        <td class="py-4 px-6">
                            <img class="" src="{{asset('storage/slider/'. $slide->src)}}">
                        </td>

                        <td class="py-4 px-6">
                            {{ $slide->header_stars}}
                        </td>
                        <td class="py-4 px-6">
                            {{ $slide->number_stars }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $slide->title }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $slide->slogan }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $slide->button1_text }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $slide->button2_text }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/back/slider/{{ $slide->id }}/show">
                                <button type="button"
                                    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2 rounded-lg">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/slider/{{ $slide->id }}/delete" method="post">
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
