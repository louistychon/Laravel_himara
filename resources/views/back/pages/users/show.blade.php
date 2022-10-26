@extends('back.layouts.index')
@section('content')
    <form action="/back/users/{{ $show->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-6">
            <label for="src" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image (expected:500x500px) </label>
            <img src="{{asset('storage/users/thumbnail/'. $show->src)}}" alt="user">
            <input type="file" id="src" name="src" class="mt-4">
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:ring-0"
                placeholder="" value={{ $show->email }}>
        </div>
        <div class="mb-6">
            <label for="Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
            <input type="text" id="Name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:ring-0"
                value={{ $show->name }}>
        </div>
        <div class="mb-6">
            <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Country</label>
            <input type="text" id="country" name="country"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:ring-0"
                value={{ $show->country }}>
        </div>
        <div class="mb-6">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">City</label>
            <input type="text" id="city" name="city"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:ring-0"
                value={{ $show->city }}>
        </div>

        @if(Auth::user()->roles_id === 1 && $show->roles_id != 1)
        <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Role</label>
        <select id="role" name="roles_id"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 focus:ring-0">
            @foreach ($roles as $role)
                @if ($role->id == 1)
                @elseif ($role->id == $show->roles->id)
                    <option value="{{ $role->id }}" name="roles_id" selected>{{ $role->name }}</option>
                @else
                    <option value="{{ $role->id }}" name="roles_id">{{ $role->name }}</option>
                @endif
            @endforeach
        @endif

        </select>
        <button type="submit"
            class="btn-logout p-2 my-2">Confirm
            modifications</button>
    </form>
@endsection
