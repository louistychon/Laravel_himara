@extends('front.layouts.index')
@section('content')

    <!-- ========== MAIN ========== -->
    <main class="room w-full pt-0">
        <div class="container">
            <div class="row col-12">
                <div class="col-12">
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
