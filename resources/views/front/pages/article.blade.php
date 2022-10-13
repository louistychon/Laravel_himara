@extends('front.layouts.index')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    @include('front.components.pagetitle')
    <!-- ========== MAIN ========== -->
    <main class="room">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ROOM SLIDER -->
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <!-- ITEM -->
                            <div class="item">
                                <figure class="gradient-overlay-hover image-icon">
                                    <a href="{{ $show->src }}">
                                        <img class="img-fluid" src="{{ asset('storage/blog/thumbnail/' . $show->src) }}"
                                            alt="Image">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4>{{ strtoupper($show->title) }}</h4>
                        <p class="dropcap">{{ $show->long_desc }}</p>
                    </div>

                    <h4 class="my-5">All comments</h4>

                    @foreach ($comments as $comment)
                        <div>
                            <p>Commented by {{ $comment->user->name }}</p>
                            {{ $comment->comment }}
                        </div>
                    @endforeach
                </div>
            </div>
    </main>
@endsection
