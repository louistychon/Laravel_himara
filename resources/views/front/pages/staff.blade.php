@extends('front.layouts.index')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
      @include('front.components.pagetitle')
      <!-- ========== MAIN ========== -->
      <main class="location-page">
        <div class="container">
          <div class="row">
            <!-- ITEM -->
            @foreach ($staffmembers as $staffmember )

            <div class="col-lg-3 col-md-6">
                <div class="staff-item">
                    <figure>
                        <img src="{{asset('storage/staff/'.$staffmember->src)}}" class="img-fluid" alt="Image">
                        <div class="position">{{$staffmember->title}}</div>
                    </figure>
                    <div class="details">
                        <h5>{{$staffmember->name}}</h5>
                        <p>{{$staffmember->text}}</p>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
        </div>
      </main>
@endsection
