@extends('back.layouts.index')
@section('content')

<a href="{{route('blogcreate')}}"><button
    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New blog post</button></a>
    <div class="overflow-x-auto relative">
        <table>
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Mini-img
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Image
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Title
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Text
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
                @foreach ($allarticles as $article)
                    <tr class="">
                        <td class="py-4 px-6">
                            <img class="img-responsive" src="{{asset('storage/blog/thumbnail/'. $article->src)}}">
                        </td>
                        <td class="py-4 px-6">
                            {{ $article->src }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $article->title }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $article->long_desc }}
                        </td>
         
                        <td class="py-4 px-6">
                            <a href="/back/blog/{{ $article->id }}/show">
                                <button
                                    class="btn-logout font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/blog/{{ $article->id }}/delete" method="post">
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
