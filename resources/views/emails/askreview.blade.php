@component('mail::message')
<p>Please leave a review about your booking !</p>
    @component('mail::button', ['url' => 'http://localhost:8000/back/testimonials/create'])
        Here
    @endcomponent

@endcomponent
