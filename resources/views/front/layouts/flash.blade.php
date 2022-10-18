@if ($message = Session::get('success'))
<div class="text-info shadow-md" role="alert">
    <h3>{{$message}}</h3>
  </div>
@endif

@if ($message = Session::get('warning'))
<div class="text-sm text-danger shadow-md" role="alert">
    <h3>{{$message}}</h3>
  </div>
@endif

@if ($errors->any())
    <div class="text-sm text-red shadow-md" role="alert">
        @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </div>
@endif
