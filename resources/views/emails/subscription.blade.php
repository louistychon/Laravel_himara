@component('mail::message')

Hello {{$user['name']}}

Your account is confirmed. Feel free to book a room anytime you need.

@component('mail::button', ['url' => 'localhost:800'])
Back on Himara
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
