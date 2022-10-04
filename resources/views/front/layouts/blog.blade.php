<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>Hotel Himara - Hotel HTML Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="images/favicon-apple.png"/>
    <link rel="icon" href="images/favicon.png">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/jquery.mmenu.css">
    <link rel="stylesheet" href="revolution/css/layers.css">
    <link rel="stylesheet" href="revolution/css/settings.css">
    <link rel="stylesheet" href="revolution/css/navigation.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- ========== ICON FONTS ========== -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">
  </head>
  <body>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
      <!-- ========== TOP MENU ========== -->
      <div class="topbar">
        <div class="container">
          <div class="welcome-mssg">
            Welcome to Hotel Himara.
          </div>
          <div class="top-right-menu">
            <ul class="top-menu">
                <li class="d-none d-md-inline">
                    @foreach ($hotelinfo as $info)

                    <a href="tel:{{$info->phone}}">
                        <i class="fa fa-phone"></i>{{$info->phone}}
                    </a>
                </li>
                <li class="d-none d-md-inline">
                    <a href="mailto:{{$info->email}}">
                        <i class="fa fa-envelope-o "></i>{{$info->email}}</a>
                    </li>
                    @endforeach
                <li class="language-menu">
                    <a href="#" class="active-language"><img src="images/icons/flags/gb.png" alt="Image">English</a>
                    <ul class="languages">
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/it.png" alt="Image">Italiano</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/gr.png" alt="Image">Ελληνικα</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/al.png" alt="Image">Shqip</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/fr.png" alt="Image">Français</a>
                        </li>
                        <li class="language">
                            <a href="#"><img src="images/icons/flags/es.png" alt="Image">Español</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ========== HEADER ========== -->
      <header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
          <!-- BRAND -->
          <div class="brand">
            <div class="logo">
              <a href="{{route('home')}}">
                @foreach ($hotelinfo as $info )

                <img src={{asset('/storage/logo/'. $info->logo) }} alt="Hotel Himara">
                @endforeach
              </a>
            </div>
          </div>
          <!-- MOBILE MENU BUTTON -->
          <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
          <!-- MAIN MENU -->
          <nav id="main-menu" class="main-menu">
            <ul class="menu">
              <li class="menu-item dropdown">
                <a href="#">HOME</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="index.html">Home Version 1</a>
                  </li>
                  <li class="menu-item">
                    <a href="index2.html">Home Version 2</a>
                  </li>
                  <li class="menu-item">
                    <a href="index3.html">Home Version 3</a>
                  </li>
                  <li class="menu-item">
                    <a href="index4.html">Home Version 4</a>
                  </li>
                  <li class="menu-item">
                    <a href="index5.html">Home Version 5</a>
                  </li>
                  <li class="menu-item">
                    <a href="index6.html">Home Version 6</a>
                  </li>
                  <li class="menu-item">
                    <a href="index7.html">Home Version 7</a>
                  </li>
                  <li class="menu-item">
                    <a href="index8.html">Home Version 8</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">ROOMS</a>
                <ul class="submenu">
                  <li class="menu-item dropdown">
                    <a href="#">Rooms</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="rooms-list.html">List View</a>
                      </li>
                      <li class="menu-item">
                        <a href="rooms-grid.html">Grid View</a>
                      </li>
                      <li class="menu-item">
                        <a href="rooms-block.html">Block View</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Room Details</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">Style 1</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="room.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Style 2</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="room-style2.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="room-style2-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown active">
                <a href="#">BLOG</a>
                <ul class="submenu">
                  <li class="menu-item dropdown">
                    <a href="#">Blog Archive</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">List View</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Classic View</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-classic.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-classic-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Grid View</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-grid.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-grid-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Blog Post</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">Style 1</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-post.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Style 2</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="blog-post-style2.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="blog-post-style2-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">PAGES</a>
                <ul class="submenu">
                  <li class="menu-item dropdown">
                    <a href="#">Gallery</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="gallery.html">Gallery 4 Columns</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-3columns.html">Gallery 3 Columns</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-2columns.html">Gallery 2 Columns</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-without-filters.html">Gallery Without Filters</a>
                      </li>
                      <li class="menu-item">
                        <a href="gallery-slider.html">Gallery Slider</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">More Pages</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="places.html">Places</a>
                      </li>
                      <li class="menu-item">
                        <a href="place-details.html">Place Details</a>
                      </li>
                      <li class="menu-item">
                        <a href="events.html">Events</a>
                      </li>
                      <li class="menu-item">
                        <a href="event-details.html">Event Details</a>
                      </li>
                      <li class="menu-item">
                        <a href="offers.html">Offers</a>
                      </li>
                      <li class="menu-item">
                        <a href="offer.html">Offer Details</a>
                      </li>
                      <li class="menu-item">
                        <a href="staff.html">Our Staff</a>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Loading Page</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="loading.html">Loading Page 1</a>
                          </li>
                          <li class="menu-item">
                            <a href="loading-style2.html">Loading Page 2</a>
                          </li>
                          <li class="menu-item">
                            <a href="loading-style3.html">Loading Page 3</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Coming Soon</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="coming-soon.html">Coming Soon Image</a>
                          </li>
                          <li class="menu-item">
                            <a href="coming-soon-video.html">Coming Soon Video</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="page.html">Right Sidebar Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="page-left-sidebar.html">Left Sidebar Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="page-full-width.html">Full Width Page</a>
                      </li>
                      <li class="menu-item">
                        <a href="404.html">404 Style 1</a>
                      </li>
                      <li class="menu-item">
                        <a href="404-style2.html">404 Style 2</a>
                      </li>
                      <li class="menu-item">
                        <a href="testimonials.html">Testimonials</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Contact</a>
                    <ul class="submenu">
                      <li class="menu-item">
                        <a href="contact.html">Contact Style 1</a>
                      </li>
                      <li class="menu-item">
                        <a href="contact-style2.html">Contact Style 2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#">Shop</a>
                    <ul class="submenu">
                      <li class="menu-item dropdown">
                        <a href="#">Shop</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="shop.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#">Shop Details</a>
                        <ul class="submenu">
                          <li class="menu-item">
                            <a href="shop-details.html">Right Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                          </li>
                          <li class="menu-item">
                            <a href="shop-details-full-width.html">Full Width</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="restaurant.html">Our Restaurant</a>
                  </li>
                  <li class="menu-item">
                    <a href="spa.html">Our Spa</a>
                  </li>
                  <li class="menu-item">
                    <a href="about-us.html">About Us</a>
                  </li>
                  <li class="menu-item">
                    <a href="location.html">Our Location</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown">
                <a href="#">ELEMENTS</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="style-guide.html">Style Guide</a>
                  </li>
                  <li class="menu-item">
                    <a href="buttons.html">Buttons</a>
                  </li>
                  <li class="menu-item">
                    <a href="icons.html">Icons</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item">
                <a href="contact.html">CONTACT US</a>
              </li>
              <li class="menu-item menu-btn">
                <a href="booking-form.html" class="btn">
                  <i class="fa fa-calendar"></i>
                  BOOK ONLINE</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
<body>
    @yield('content');
    @include('front.components.footer');
</body>

</html>
