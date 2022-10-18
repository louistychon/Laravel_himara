@component('mail::message')
    <p>Thanks for creating your account with the following details :

        {{ $data3['name'] }} <br />
        {{ $data3['city'] }} <br />
        {{ $data3['country'] }}<br />
        {{ $data3['email'] }}<br />
    </p>
    @component('mail::button', ['url' => 'localhost:8000'])
        Back on Himara
    @endcomponent
@endcomponent
