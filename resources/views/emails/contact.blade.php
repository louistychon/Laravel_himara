@component('mail::message')
<p>
    New contact request from : {{ $data['name'] }}.<br/>
    Details of the request : <br/>
    Email: {{ $data['email'] }} <br/>
    Phone: {{ $data['phone'] }} <br/>
    Subject: {{ $data['subject'] }} <br/>
    Message: {{ $data['message'] }} <br/>
</p>
    @component('mail::button', ['url' => 'http://localhost:8000'])
        Back to website
    @endcomponent

@endcomponent
