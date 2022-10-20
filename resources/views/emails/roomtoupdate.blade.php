@component('mail::message')
<p>
    New room with name {{$roomtoupdate['name']}} to update.
@component('mail::button', ['url' => 'http://localhost:8000'])
back to website
@endcomponent
</p>
@endcomponent
