@extends('front.layouts.index')
@section('content')
      <!-- ========== PAGE TITLE ========== -->
     @include('front.components.pagetitle')
      <!-- ========== MAIN ========== -->
      <main class="gallery-page">
        <!-- FILTERS -->
        <div class="container">
          <div class="gallery-filters">
            <a href="#" data-filter="*" class="filter active">ALL</a>
            <a href="#" data-filter=".filter-restaurnat" class="filter">RESTAURANT</a>
            <a href="#" data-filter=".filter-swimmingpool" class="filter">SWIMMING POOL</a>
            <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
            <a href="#" data-filter=".filter-roomview" class="filter">ROOM VIEW</a>
          </div>
        </div>
        <!-- GALLERY -->
        <div class="container">
          <div class="grid image-gallery row">
            <!-- ITEM -->
            @foreach ($allimgs as $img)
            <div class="gallery-item {{"filter-".$img->filter->name}} col-md-3">
              <figure class="gradient-overlay image-icon">
                <a href="{{asset('/storage/gallery/thumbnail/'. $img->src)}}">
                  <img src="{{asset('/storage/gallery/thumbnail/'. $img->src)}}" class="img-fluid" alt="Image">
                </a>
                <figcaption>{{$img->caption}}</figcaption>
              </figure>
            </div>

            @endforeach
      </main>
@endsection
