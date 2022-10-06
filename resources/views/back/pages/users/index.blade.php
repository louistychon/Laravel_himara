@extends('back.layouts.index')
@section('content')

<a href="{{route('userscreate')}}"><button type="button"
    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2">New user</button></a>

    <div class="overflow-x-auto relative">
        <table class="">
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Country
                    </th>
                    <th scope="col" class="py-3 px-6">
                        City
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Role
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
                @foreach ($allusers as $user)
                    <tr class="">
                        <td scope="row" class="font-bold py-4 px-6">
                            {{ $user->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $user->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $user->country }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $user->city }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $user->roles->name }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/back/users/{{ $user->id }}/show">
                                <button type="button"
                                    class="btn-logout font-medium text-sm px-5 py-2.5 mr-2 mb-2 rounded-lg">Edit</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/back/users/{{ $user->id }}/delete" method="post">
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
