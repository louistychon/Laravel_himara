@component('mail::message')
<p>
New room with name {{ $roomtostores['name'] }} to store.

@component('mail::button', ['url' => 'http://localhost:8000'])
Back to website
@endcomponent

</p>
@endcomponent
