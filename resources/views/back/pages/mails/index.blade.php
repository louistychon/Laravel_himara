@extends('back.layouts.index')
@section('content')

    <div class="overflow-x-auto relative">
        <table class="entry">
            <thead class="">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Phone
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Subject
                    </th>
                    <th scope="col" class="py-3 px-6">
                       Message
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Edit from
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allmails as $mail)
                    <tr class="">
                        <td class="font-bold py-4 px-6">
                            {{ $mail->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $mail->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $mail->phone }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $mail->subject }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $mail->message }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="/mail/{{ $mail->id }}/show">
                                <button
                                    class="btn-logout font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">View</button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <form action="/mail/{{ $mail->id }}/delete" method="post">
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
