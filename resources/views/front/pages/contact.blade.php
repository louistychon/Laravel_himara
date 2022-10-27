@extends('front.layouts.index')
@section('content')
    @include('front.components.pagetitle')
    <!-- ========== MAIN ========== -->
    <main class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Let’s Talk</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus sit, fugiat at in assumenda
                        corrupti autem iste eveniet eaque vitae beatae tenetur, voluptatem eius. Numquam.</p>
                    <!-- CONTACT FORM -->
                    <form class="contact-form" method="post" action="/mail/contact">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="name" placeholder="Name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" placeholder="Phone" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="subject" placeholder="Subject" type="text">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn">SEND YOUR MESSAGE</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="google-map">
                            <div class="toggle-streetview" id="openStreetView">
                                <a target="blank" href="https://www.google.com/maps/@50.8552782,4.3412854,3a,75y,4.37h,91.41t/data=!3m7!1e1!3m5!1sRH73ZZlfUNs7RfcnVCEQAw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DRH73ZZlfUNs7RfcnVCEQAw%26cb_client%3Dmaps_sv.tactile.gps%26w%3D203%26h%3D100%26yaw%3D16.714003%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192"><i class="fa fa-street-view" aria-hidden="true"></i></a>
                            </div>
                            <div id="map-canvas">
                                @foreach ($hotelinfo as $info)
                                <iframe
                                width="350"
                                height="400"
                                style="border:0"
                                loading="lazy"
                                allowfullscreen
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALbVaXhUfCrNshLggJurnIsKAp6OUD1xw
                                  &q={{$info->search_map}}">
                              </iframe>
                              @endforeach
                            </div>
                        </div>
                        <div class="contact-details mt75">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        @foreach ($hotelinfo as $info)
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i>{{ $info->address }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-envelope"></i>{{ $info->email }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-phone"></i>{{ $info->phone }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fax"></i>{{ $info->phone }}</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-globe"></i>{{ $info->website }}</a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            <div class="social-media mt50">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-tripadvisor"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
