@component('mail::message')
<p>
    <h3>HOTEL HIMARA</h3>
    New Reservation !
    Reservation Details:<br/>
    Booking ID : {{$data2['reservation_id']}} <br/>
    Name :	{{$data2['name']}}<br/>
   @if($data2['email'] != null) Email :	{{$data2['email']}}<br/>@endif
   @if($data2['phone'] != null) Phone : {{$data2['phone']}}<br/>@endif
    Adults : {{$data2['number_adults']}}<br/>
    Children : {{$data2['number_adults']}}<br/>
    Arrival : {{$data2['date_start']}}<br/>
    Departure : {{$data2['date_end']}}<br/>
    @if($data2['phone'] != null) Comments :  {{$data2['booking_comment'] }}<br/>@endif

    Thank You,
    Hotel Himara
</p>

@endcomponent
