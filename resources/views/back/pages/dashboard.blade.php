@extends('back.layouts.index')
@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-gray-400">You are logged in as : {{Auth::user()->name}}</p>
                    <p class="text-gray-400">Your e-mail is : {{Auth::user()->email}}</p>
                    <a href="/back/users/{{Auth::user()->id}}/show"><button class="btn-logout p-2 mt-2">Edit my info</button></a>
                </div>
            </div>
        </div>
    </div>

@endsection
