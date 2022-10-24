@extends('front.layouts.index')
@section('content')
    <!-- ========== PAGE TITLE ========== -->
    @include('front.components.pagetitle')
    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ITEM -->
                    @foreach ($allrooms as $roomii)
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="/room/{{ $roomii->id }}/show">
                                        @foreach ($roomii->imgs as $i => $imgs)
                                            @if ($i >= 1)
                                            @break
                                        @endif
                                        <img src="{{ asset('storage/room/thumbnail/' . $imgs->src) }}"
                                            class="img-fluid" alt="Image">
                                    @endforeach
                            </figure>
                        </div>
                        <div class="col-lg-5">
                            <div class="room-info">
                                <h3 class="room-title">
                                    <a href="/room/{{ $roomii->id }}/show">{{ $roomii->name }}</a>
                                </h3>
                                <span class="room-rates">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                </span>
                                <p>{{ Str::limit($roomii->long_desc, 50) }}</p>
                                <div class="room-services">
                                    @foreach ($roomii->services as $i => $service)
                                        @if ($i > 2)
                                        @break
                                    @endif
                                    <i class="fa {{ $service->icon_classname }}" aria-hidden="true"
                                        data-toggle="popover" data-placement="right" data-trigger="hover"
                                        data-content="{{ $service->small_desc }}"
                                        data-original-title="{{ $service->name }}"></i>
                                @endforeach
                                <span>Beds: {{ $roomii->king_bed }} King @if ($roomii->sofa_bed > 0)
                                        and {{ $roomii->sofa_bed }} Sofabed
                                    @endif
                                </span>
                                <span>Max Guests: {{ $roomii->max_guests }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="room-price">
                            <span class="price">€{{ $roomii->price }}/ night</span>
                            <a href="/room/{{ $roomii->id }}/show" class="btn btn-sm">view <br> details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- PAGINATION -->
        {{ $allrooms->links() }}
    </div>
    <div class="col-lg-3 col-12">
        <div class="sidebar">
            <aside class="widget noborder">
                <div class="search">
                    <form class="widget-search" >
                        <input type="search" placeholder="Search" name="search">
                        <button class="btn-search" id="searchsubmit" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </aside>
            <!-- WIDGET -->
            <aside class="widget">
                <h4 class="widget-title">CATEGORIES</h4>
                <ul class="categories">
                    @foreach ($roomtypes as $roomtype)
                        <li>
                            <a href="#">{{ $roomtype->name }}<span
                                    class="posts-num">{{ $roomtype->rooms_count }}</span></a>
                        </li>
                    @endforeach
                </ul>
            </aside>
            <!-- WIDGET -->
            <aside class="widget">
                <h4 class="widget-title">Tags</h4>
                <div class="tagcloud">
                    @foreach ($roomtags as $tag)
                        <a href="/roomlist?tag={{ $tag->name }}">
                            <span class="tag">{{ $tag->name }}</span></a>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</div>
</div>
</main>
@endsection
