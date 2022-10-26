@component('mail::message')
<p>Please leave a review about your booking !</p>
    @component('mail::button', ['url' => 'http://localhost:8000/back/review'])
        Here
    @endcomponent

@endcomponent