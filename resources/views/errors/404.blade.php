@extends('front.layouts.index')
    @section('content')
    <main class="error404-fullscreen-page gradient-overlay">
            <div class="inner container flex justify-center">
                <h1 class="error-number w-full text-center">
                   404
                </h1>
                <h2 class="title">OOPS!! PAGE NOT FOUND</h2>
                <div class="mt80">
                    <a href="{{route('home')}}" class="btn btn-dark btn-sm">
                        <i class="fa fa-angle-left"></i>
                        GO BACK TO HOME PAGE</a>
                    <div class="social-media aligncenter mt80">
                        <a class="facebook" href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="googleplus" href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="pinterest" href="#">
                            <i class="fa fa-pinterest"></i>
                        </a>
                        <a class="linkedin" href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="youtube" href="#">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a class="instagram" href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </main>
        @endsection
