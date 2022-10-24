@extends('back.layouts.index')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-fit-content h-fit-content">
                <div class="p-6 border-1 bg-white border border-gray-200 text-center">
                    <h4 class="room-title">Hello !</h4>
                    <img src="{{ asset('storage/users/thumbnail/' . Auth::user()->src) }}"
                        class="img-responsive m-auto block">
                    <p class="text-gray-400">You are logged in as : {{ Auth::user()->name }}</p>
                    <p class="text-gray-400">Your e-mail is : {{ Auth::user()->email }}</p>
                    <p class="text-gray-400">Your role is : {{ Auth::user()->roles->name }}</p>
                    <a href="/back/users/{{ Auth::user()->id }}/show"><button class="btn-logout p-2 mt-2">Edit my
                            info</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-fit-content h-fit-content">
                <h4 class="w-full text-center">Your bookings</h4>
                @foreach ($bookings as $booking)
                    @if ($booking->user_id === Auth::user()->id)
                        <div class="p-6 border-1 bg-white border border-gray-200 text-center">
                            <p class="text-black">Booking ID : {{ $booking->reservation_id }}</p>
                            <p class="text-black">Number adults : {{ $booking->number_adults }}</p>
                            <p class="text-black">Number children : {{ $booking->number_children }}</p>
                            <p class="text-black">Departure : {{ $booking->date_start }}</p>
                            <p class="text-black">Return : {{ $booking->date_end }}</p>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
@endsection
