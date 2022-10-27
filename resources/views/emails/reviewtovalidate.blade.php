@component('mail::message')
<p>New review to validate !</p>
    @component('mail::button', ['url' => 'http://localhost:8000/back/testimonials'])
        Here
    @endcomponent

@endcomponent
