<!-- Primary Navigation Menu -->
{{-- <div class="bg-blue-900 text-white min-h-full min w-full">
        <div class="flex flex-col justify-between mt-5">
            <div class="flex flex-col">
                <div class="card-content text-center">
                    <p class="text-red-500">{{ Auth::user()->name }}</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div> --}}
<!-- Navigation Links -->

<nav class="px-2 bg-white border-gray-200">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            @foreach ($hotelinfo as $info)
                <img src="{{ asset('storage/logo/' . $info->logo) }}" class="w-1/2 p-2 mr-3 h-6 sm:h-10" alt="Himara Logo">
            @endforeach
            <span class="self-center text-xl font-semibold whitespace-nowrap ">back &copy;</span>
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
                <li>
                    <a href="{{route('dashboard')}}"
                        class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="{{route('users')}}"
                        class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page">Users</a>
                </li>
                <li>
                    <a href="{{route('slider')}}"
                        class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page">Slider</a>
                </li>
                <li>
                    <a href="{{route('services')}}"
                        class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page">Services</a>
                </li>
                <li>
                    <a href="{{route('restaurant')}}"
                        class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                        aria-current="page">Restaurant</a>
                </li>
                <li>
                    <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 md:p-0 md:w-auto">Pages
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
                            <li>
                                <a href="#" class="block py-2 px-4 ">Home</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 ">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 ">Gallery</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 ">Team</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 ">Contact</a>
                            </li>
                        </ul>
                    </div>

                </li>
                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </ul>
        </div>
    </div>
</nav>
