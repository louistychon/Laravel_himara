 <!-- ========== FOOTER ========== -->
 <footer>
     <div class="footer-widgets">
         <div class="container">
             <div class="row">
                 <!-- WIDGET -->
                 <div class="col-md-3">
                     <div class="footer-widget">
                         @foreach ($hotelinfo as $info)
                             <img src="{{asset('storage/logo/thumbnail/'. $info->logo)}}" class="footer-logo" alt="Hotel Himara">
                         @endforeach
                         <div class="inner">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda
                                 incidunt
                                 dolorem aliquam!</p>
                             <a href="https://www.tripadvisor.com/" target="_blank">
                                 <div class="tripadvisor-banner">
                                     <span class="review">Recommended</span>
                                     <img src="images/icons/tripadvisor.png" alt="Image">
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
                 <!-- WIDGET -->
                 <div class="col-md-3">
                     <div class="footer-widget">
                         <h3>LATEST ROOMS</h3>
                         <div class="inner">
                             <ul class="latest-posts">
                                 @foreach ($rooms5 as $room)
                                     <li>
                                         <a href="room/{{$room->id}}/show">{{ucfirst(strtolower($room->name))}} - {{$room->type->name}}</a>
                                     </li>
                                 @endforeach
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- WIDGET -->
                 <div class="col-md-3">
                     <div class="footer-widget">
                         <h3>USEFUL LINKS</h3>
                         <div class="inner">
                             <ul class="useful-links">
                                 <li>
                                     <a href="{{route('contact')}}">About Us</a>
                                 </li>
                                 <li>
                                     <a href="{{route('contact')}}">Contact Us</a>
                                 </li>

                                 <li>
                                     <a href="{{route('gallery')}}">Himara Gallery</a>
                                 </li>
                                 <li>
                                     <a href="{{route('contact')}}">Our Location</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 <!-- WIDGET -->
                 <div class="col-md-3">
                     <div class="footer-widget">
                         <h3>Contact Info</h3>
                         <div class="inner">
                             @foreach ($hotelinfo as $info)
                                 <ul class="contact-details">
                                     <li>
                                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                                         {{ $info->address }}
                                     </li>
                                     <li>
                                         <i class="fa fa-phone" aria-hidden="true"></i>
                                         {{ $info->phone }}
                                     </li>
                                     <li>
                                         <i class="fa fa-fax"></i>
                                         {{ $info->phone }}
                                     </li>
                                     <li>
                                         <i class="fa fa-globe"></i>
                                         {{ $info->website }}
                                     </li>
                                     <li>
                                         <i class="fa fa-envelope"></i>
                                         Email:
                                         <a href="mailto: {{ $info->email }}">
                                             {{ $info->email }}
                                         </a>
                                     </li>
                                 </ul>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- SUBFOOTER -->
     <div class="subfooter">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <div class="copyrights">&copy; 2022. Designed by Louis Tychon
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="social-media">
                         <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                             <i class="fa fa-facebook"></i>
                         </a>
                         <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                             <i class="fa fa-twitter"></i>
                         </a>
                         <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
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
                         <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                             <i class="fa fa-instagram"></i>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div>
     @include('front.components.contactnotif')
     @include('front.components.backtotop')
     @include('front.components.jslinks')
 </div>
