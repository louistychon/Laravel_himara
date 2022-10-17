@component('mail::message')
    New contact request from : {{ $data['name'] }}.

    Details of the request :
    Email: {{ $data['email'] }} @php
        echo "\n";
    @endphp
    Phone: {{ $data['phone'] }}@php
        echo "\n";
    @endphp
    Subject: {{ $data['subject'] }}
    Message: {{ $data['message'] }}

    @component('mail::button', ['url' => 'http://localhost:8000'])
        Back to website
    @endcomponent

@endcomponent
