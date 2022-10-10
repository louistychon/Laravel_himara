@if ($message = Session::get('success'))
<div class="p-4 mb-4 text-sm text-green-700 shadow-md bg-green-100 rounded-lg" role="alert">
    <span class="font-medium">{{$message}}</span>
  </div>
@endif

@if ($message = Session::get('warning'))
<div class="p-4 mb-4 text-sm text-red-700 bg-red-100 shadow-md rounded-lg" role="alert">
    <span class="font-medium">{{$message}}</span>
  </div>
@endif

@if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 shadow-md rounded-lg" role="alert">
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif
