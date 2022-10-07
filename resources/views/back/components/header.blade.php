<nav class="p-4 border-gray-200 mm-navbar">
    <div class="container flex flex-wrap justify-between items-center my-auto h">
        <a href="{{route('dashboard')}}" class="flex items-center">
            @foreach ($hotelinfo as $info)
                <img src="{{ asset('storage/logo/thumbnail/' . $info->logo) }}" class="w-1/2 p-2 mr-3" alt="Himara Logo">
            @endforeach
            <span class="self-center text-xl font-semibold whitespace-nowrap text_logo ">back &copy;</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button"
            class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300  "
            aria-controls="mobile-menu-2" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col items-center mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li class="menu_item">
                    <a href="{{route('dashboard')}}"
                        class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0 uppercase"
                        aria-current="page">Dashboard</a>
                </li>
                <li class="menu_item">
                    <a href="{{route('hotelinfo')}}"
                        class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0 uppercase"
                        aria-current="page">Hotel info</a>
                </li>
                <li class="menu_item">
                    <a href="{{route('users')}}"
                        class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0 uppercase"
                        aria-current="page">Users</a>
                </li>
                <li class="menu_item">
                    <a href="{{route('slider')}}"
                        class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0 uppercase"
                        aria-current="page">Slider</a>
                </li>
                <li class="menu_item">
                    <a href="{{route('services')}}"
                        class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0 uppercase"
                        aria-current="page">Services</a>
                </li>
                <li class="menu_item">
                    <a href="{{route('restaurant')}}"
                        class="block py-2 pr-4 pl-3 rounded md:bg-transparent md:p-0 uppercase"
                        aria-current="page">Restaurant</a>
                </li>
                <li class="menu_item">
                    <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium border-b border-gray-100 md:p-0 md:w-auto uppercase menu_item ">Pages
                        <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10.1818px, 0px);">
                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownNavbarButton">
                            <li class="dropdown_item">
                                <a href="#" class="block py-2 px-4 uppercase">Home</a>
                            </li>
                            <li class="dropdown_item">
                                <a href="#" class="block py-2 px-4 uppercase">Blog</a>
                            </li>
                            <li class="dropdown_item">
                                <a href="{{route('galleryback')}}" class="block py-2 px-4 uppercase">Gallery</a>
                            </li>
                            <li class="dropdown_item">
                                <a href="{{route('staffback')}}" class="block py-2 px-4 uppercase">Team</a>
                            </li>
                            <li class="dropdown_item">
                                <a href="{{route('contactback')}}" class="block py-2 px-4 uppercase">Contact</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <li>
                    <div class="">
                        <!-- Authentication -->
                            <a href="{{ route('logout') }}"><button class="btn-logout p-2 block m-auto">Log Out</button></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
