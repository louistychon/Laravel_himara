@extends('front.layouts.index')
@section('content')
    <!-- ========== REVOLUTION SLIDER ========== -->
    <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
            <ul>
                <!-- SLIDE NR. 1 -->
                @foreach ($allslider as $slide)
                    <li data-transition="crossfade">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('storage/slider/thumbnail/' . $slide->src) }}" alt="Image" title="Image"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                            class="rev-slidebg" data-no-retina="">
                        <!-- LAYER NR. 1 -->
                        <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
                            data-responsive_offset="on" data-fontsize="['80','50','40','30']"
                            data-lineheight="['60','50','40','30']" data-whitespace="nowrap"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 5; color: #fff; font-weight: 900;">
                            {{ $slide->title }}</h1>
                        <!-- LAYER NR. 2 -->
                        @if ($slide->slogan)
                            <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410"
                                data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16"
                                data-whitespace="nowrap"
                                data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                style="z-index: 6; color: #fff;">{{ $slide->slogan }}</div>
                        @endif
                        <!-- LAYER NR. 3 -->
                        @if ($slide->button1_text)
                            <div class="tp-caption" data-x="center" data-hoffset="-120" data-y="480" data-voffset=""
                                data-responsive_offset="on" data-whitespace="nowrap"
                                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                style="z-index: 11;">
                                <a class="btn" href="booking-form.html">
                                    <i class="fa fa-calendar"></i>{{ $slide->button1_text }}</a>
                            </div>
                        @endif
                        <!-- LAYER NR. 4 -->
                        @if ($slide->button2_text)
                            <div class="tp-caption" data-x="center" data-hoffset="128" data-y="480" data-voffset=""
                                data-responsive_offset="on" data-whitespace="nowrap"
                                data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                style="z-index: 11;">
                                <a class="btn" href="contact.html">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $slide->button2_text }}</a>
                            </div>
                        @endif
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="200"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['18','18','16','16']"
                            data-lineheight="['18','18','16','16']" data-whitespace="nowrap"
                            data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="color: #fff">
                            @if ($slide->number_stars == 1)
                                <i class="fa fa-star-o"></i>
                            @elseif($slide->number_stars == 2)
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            @elseif($slide->number_stars == 3)
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            @elseif($slide->number_stars == 4)
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            @elseif($slide->number_stars == 5)
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            @endif
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="240"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['25','25','18','18']"
                            data-lineheight="['25','25','18','18']" data-whitespace="nowrap"
                            data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="color: #fff">
                            {{ $slide->header_stars }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- ========== BOOKING FORM ========== -->
        <div class="horizontal-booking-form">
            <div class="container">
                <div class="inner box-shadow-007">
                    <!-- ========== BOOKING NOTIFICATION ========== -->
                    <div id="booking-notification" class="notification"></div>
                    <form id="booking-form">
                        <!-- NAME -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Name
                                        <a href="#" title="Your Name" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please type your first name and last name">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input class="form-control" name="booking-name" type="text" data-trigger="hover"
                                        placeholder="Write Your Name">
                                </div>
                            </div>
                            <!-- EMAIL -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Email
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please type your email adress">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input class="form-control" name="booking-email" type="email"
                                        placeholder="Write your Email">
                                </div>
                            </div>
                            <!-- ROOM TYPE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Room Type
                                        <a href="#" title="Room Type" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please select room type">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <select class="form-control" name="booking-roomtype" title="Select Room Type"
                                        data-header="Room Type">
                                        <option value="Single">Single Room</option>
                                        <option value="Double">Double Room</option>
                                        <option value="Deluxe">Deluxe Room</option>
                                    </select>
                                </div>
                            </div>
                            <!-- DATE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Check-In/Out
                                        <a href="#" title="Check-In / Check-Out" data-toggle="popover"
                                            data-placement="top" data-trigger="hover"
                                            data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input type="text" class="datepicker form-control" name="booking-date"
                                        placeholder="Arrival & Departure" readonly="readonly">
                                </div>
                            </div>
                            <!-- GUESTS -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Guests
                                        <a href="#" title="Guests" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please Select Adults / Children">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <div class="panel-dropdown">
                                        <div class="form-control guestspicker">Guests
                                            <span class="gueststotal"></span>
                                        </div>
                                        <div class="panel-dropdown-content">
                                            <div class="guests-buttons">
                                                <label>Adults
                                                    <a href="#" title="" data-toggle="popover"
                                                        data-placement="top" data-trigger="hover"
                                                        data-content="18+ years" data-original-title="Adults">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="booking-adults" class="booking-guests"
                                                        value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                            <div class="guests-buttons">
                                                <label>Cildren
                                                    <a href="#" title="" data-toggle="popover"
                                                        data-placement="top" data-trigger="hover"
                                                        data-content="Under 18 years" data-original-title="Children">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="booking-children" class="booking-guests"
                                                        value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BOOKING BUTTON -->
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                                <div class="advanced-form-link">
                                    <a href="booking-form.html">
                                        Advanced Booking Form
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== ABOUT ========== -->
    <section class="about mt100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h4 class="text-uppercase">Hotel Himara. <span class="text-himara"> since 1992</span></h4>
                        <p class="section-subtitle">High quality accommodation services</p>
                    </div>
                    <div class="info-branding">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic
                            voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere
                            modi
                            tempora ducimus enim dicta laborum esse aliquam rem
                            assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga.
                            Excepturi
                            facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit
                            dolores
                            veritatis minus quam atque non autem quasi
                            consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat
                            assumenda.</p>
                        <div class="providers">
                            <span>Recommended on:</span>
                            <!-- ITEM -->
                            @foreach ($partners as $partner)
                                <div class="item">
                                    <a href="#">
                                        <img src="{{ asset('/storage/partners/' . $partner->src) }}" alt="Image">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="brand-info">
                        <div class="inner">
                            <div class="content">
                                @foreach ($hotelinfo as $info)
                                    <img src="{{ asset('storage/logo/thumbnail/' . $info->logo) }}" width="100"
                                        alt="Image">
                                @endforeach
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h5 class="title">LUXURY HOTEL</h5>
                                <p class="mt20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste
                                    suscipit
                                    voluptates architecto nemo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== ROOMS ========== -->
    <section class="rooms gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR <span class="text-himara">ROOMS</span></h4>
                <p class="section-subtitle">Our favorite rooms</p>
                <a href="rooms-list.html" class="view-all">View all rooms</a>
            </div>
            <div class="row">
                <!-- ITEM -->
                <div class="col-md-4">
                    <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="room.html">
                                <img src="images/rooms/single/single1.jpg" class="img-fluid" alt="Image">
                            </a>
                            <div class="room-services">
                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Breakfast Included"
                                    data-original-title="Breakfast"></i>
                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                    data-original-title="TV"></i>
                            </div>
                            <div class="room-price">€89 / night</div>
                        </figure>
                        <div class="room-info">
                            <h2 class="room-title">
                                <a href="room.html">Single Room</a>
                            </h2>
                            <p>Enjoy our single room</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-md-4">
                    <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="room.html">
                                <img src="images/rooms/double/double.jpg" class="img-fluid" alt="Image">
                            </a>
                            <div class="room-services">
                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Breakfast Included"
                                    data-original-title="Breakfast"></i>
                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                    data-original-title="TV"></i>
                            </div>
                            <div class="room-price">€129 / night</div>
                        </figure>
                        <div class="room-info">
                            <h2 class="room-title">
                                <a href="room.html">Double Room</a>
                            </h2>
                            <p>Enjoy our double room</p>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-md-4">
                    <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="room.html">
                                <img src="images/rooms/deluxe/deluxe.jpg" class="img-fluid" alt="Image">
                            </a>
                            <div class="room-services">
                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Breakfast Included"
                                    data-original-title="Breakfast"></i>
                                <i class="fa fa-bath" data-toggle="popover" data-placement="right" data-trigger="hover"
                                    data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                    data-original-title="TV"></i>
                            </div>
                            <div class="room-price">€189 / night</div>
                        </figure>
                        <div class="room-info">
                            <h2 class="room-title">
                                <a href="room.html">Deluxe Room</a>
                            </h2>
                            <p>Enjoy our delux room</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== SERVICES ========== -->
    @if ($services->count() > 0)
        <section class="services">
            <div class="container">
                <div class="section-title">
                    <h4>HIMARA. <span class="text-himara">SERVICES</span></h4>
                    <p class="section-subtitle">Check out our awesome services</p>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div data-slider-id="services" class="services-owl owl-carousel">
                            @foreach ($services as $service)
                                <figure class="gradient-overlay">
                                    <img src="{{ asset('/storage/services/thumbnail/' . $service->src) }}"
                                        class="img-fluid" alt="Image">
                                    <figcaption>
                                        <h4>{{ $service->name }}</h4>
                                    </figcaption>
                                </figure>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="owl-thumbs" data-slider-id="services">
                            @foreach ($services as $service)
                                <div class="owl-thumb-item">
                                    <span class="media-left">
                                        <i class="{{ $service->icon->src }}"></i>
                                    </span>
                                    <div class="media-body">
                                        <h5>{{ $service->name }}</h5>
                                        <p>{{ $service->short_desc }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
    @endif
    <!-- ========== GALLERY ========== -->
    @if ($galleryimgs->count() > 0)
        <section class="gallery">
            <div class="container">
                <div class="section-title">
                    <h4>HIMARA. <span class="text-himara">GALLERY</span></h4>
                    <p class="section-subtitle">Check out our image gallery</p>
                    <a href="gallery.html" class="view-all">View gallery images</a>
                </div>
                <div class="gallery-owl owl-carousel image-gallery">
                    <!-- ITEM -->
                    @foreach ($galleryimgs as $img)
                        <div class="gallery-item">
                            <figure class="gradient-overlay image-icon">
                                <a href="{{ asset('/storage/gallery/thumbnail/' . $img->src) }}">
                                    <img src="{{ asset('/storage/gallery/thumbnail/' . $img->src) }}" alt="Image">
                                </a>
                                <figcaption>{{ $img->caption }}</figcaption>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
    @endif
    <!-- ========== TESTIMONIALS ========== -->
    <section class="testimonials gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR GUESTS LOVE US</h4>
                <p class="section-subtitle">What our guests are saying about us</p>
            </div>
            <div class="owl-carousel testimonials-owl">
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user1.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Marlene Simpson</h4>
                            <div class="location">Madrid / Spain</div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user2.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Brad Knight</h4>
                            <div class="location">Athens / Greece</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user3.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Daryl Phillips</h4>
                            <div class="location">Lisbon / Portugal</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user4.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Felecia Lawson</h4>
                            <div class="location">Paris / France</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user5.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Joanne Robinson</h4>
                            <div class="location">New York / USA</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user6.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Emily Hill</h4>
                            <div class="location">Rome / Italy</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user7.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Mabel Hicks</h4>
                            <div class="location">Moscow / Russia</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user8.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Kent Lambert</h4>
                            <div class="location">Berlin / Germany</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user9.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Gerald Schmidt</h4>
                            <div class="location">Zagreb / Croatia</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== RESTAURANT ========== -->
    <section class="restaurant image-bg parallax gradient-overlay op5" data-src="images/restaurant.jpg"
        data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="container">
            <div class="section-title">
                <h4>HIMARA. RESTAURANT</h4>
                <p class="section-subtitle">Live a gourmet dining experience</p>
            </div>
            <div class="row">
                <!-- ITEM -->
                @foreach ($dishes as $dish)
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="restaurant-menu-item">
                            <div class="row mt-4">
                                <div class="col-lg-4 col-12">
                                    <figure>
                                        <img src="{{ asset('storage/dishes/thumbnail/' . $dish->src) }}"
                                            class="img-fluid " alt="Image">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-12">
                                    <div class="info">
                                        <div class="title">
                                            <span class="name">{{ $dish->name }}</span>
                                            <span class="price">
                                                <span class="amount">{{ $dish->price }}€</span>
                                            </span>
                                        </div>
                                        <p>{{ $dish->text }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- ITEM -->

            </div>
        </div>
    </section>
    <!-- ========== NEWS ==========-->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h4 class="title">LATEST NEWS</h4>
                <p class="section-subtitle">Check out our latest news</p>
            </div>
            <div class="row">
                <!-- ITEM -->
                @foreach ($blogpost as $new)
                    <div class="col-md-4">
                        <div class="news-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="blog-post.html">
                                    <img src="{{ asset('/storage/blog/' . $new->src) }}" class="img-fluid"
                                        alt="Image">
                                </a>
                            </figure>
                            <div class="news-info">
                                <h4 class="title">
                                    <a href="blog-post.html">{{ $new->title }}</a>
                                </h4>
                                <p>{{ $new->desc }}</p>
                                <div class="post-meta">
                                    <span class="author">
                                        <a href="#"><img src="images/users/admin.jpg" width="16"
                                                alt="Image">
                                            {{ $new->users->name }}</a>
                                    </span>
                                    <span class="date">
                                        <i class="fa fa-clock-o"></i>
                                        {{ date('d-m-Y', strtotime($new->updated_at)) }}</span>
                                    <span class="comments">
                                        <a href="#">
                                            <i class="fa fa-commenting-o"></i>
                                            {{ $new->comments }} Comment</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========== VIDEO ========== -->
    <section class="video np parallax gradient-overlay op6" data-src="images/video.jpg" data-parallax="scroll"
        data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="inner gradient-overlay">
            <div class="container">
                <div class="video-popup">
                    <a class="popup-vimeo" href="https://www.youtube.com/watch?v=BDDfopejpwk">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT V2 ========== -->
    <section class="contact-v2 gray">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-title">
                        <h4>GET IN TOUCH</h4>
                        <p class="section-subtitle">Get in touch</p>
                    </div>
                    <ul class="contact-details">
                        @foreach ($hotelinfo as $info)
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{ $info->address }}
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                Phone: {{ $info->phone }}
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                Fax: {{ $info->phone }}
                            </li>
                            <li>
                                <i class="fa fa-globe"></i>
                                Web: {{ $info->website }}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:
                                <a href="mailto:{{ $info->email }}"> {{ $info->email }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-7">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Say hello</p>
                    </div>
                    <form id="contact-form" name="contact-form">
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Your Name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn" type="submit">
                            <i class="fa fa-location-arrow"></i>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
