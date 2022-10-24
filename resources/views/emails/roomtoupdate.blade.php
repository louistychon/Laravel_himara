@component('mail::message')
<p>
Room with name {{$roomtoupdate['name']}} to update.
@component('mail::button', ['url' => 'http://localhost:8000'])
back to website
@endcomponent
</p>
@endcomponent
