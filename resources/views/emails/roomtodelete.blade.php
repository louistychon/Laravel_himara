@component('mail::message')
<p>
Room with name {{$roomtodelete['name']}} to delete.
Consult your admin account to validate the deletion of this room.

@component('mail::button', ['url' => 'http://localhost:8000'])
    Back to website
@endcomponent

</p>
@endcomponent
