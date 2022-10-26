@extends('back.layouts.index')
@section('content')
    <a href="{{ route('testimonialscreate') }}"><button class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New
            testimonial</button></a>
    <div class="overflow-x-auto relative">
        <table>
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        User
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Rating
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Room
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
                @foreach ($alltestimonials as $testimonial)
                    <tr class="">
                        <td class="py-4 px-6">
                            {{ $testimonial->user->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $testimonial->rating }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $testimonial->rooms_id}}
                        </td>
                        <td class="py-4 px-6">
                            {{ $testimonial->text }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/back/testimonials/{{ $testimonial->id }}/show">
                                <button
                                    class="btn-logout font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/testimonials/{{ $testimonial->id }}/delete" method="post">
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
