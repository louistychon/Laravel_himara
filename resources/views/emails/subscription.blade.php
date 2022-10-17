@component('mail::message')

New customer account !

{{$data3['name']}}
{{$data3['city']}}
{{$data3['country']}}
{{$data3['email']}}

@component('mail::button', ['url' => 'localhost:8000'])
Back on Himara
@endcomponent


@endcomponent
