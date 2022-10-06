  <!-- ========== PRELOADER ========== -->
  <div class="loader loader3">
    <div class="loader-inner">
      <div class="spin">
        <span></span>
        @foreach ($hotelinfo as $info )
        <img src="{{asset('storage/logo/thumbnail/'. $info->logo)}}" alt="Hotel Himara">
        @endforeach
      </div>
    </div>
  </div>
