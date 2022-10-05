<nav class="min-h-full min w-full bg-white flex border-red-100">
    <!-- Primary Navigation Menu -->
    <div class="bg-blue-900 text-white min-h-full min w-full">
        <div class="flex flex-col justify-between mt-5">
            <div class="flex flex-col">
            <div class="card-content text-center">
                <p class="text-red-500">{{Auth::user()->name}}</p>
                <p>{{Auth::user()->email}}</p>
            </div>

            </div>
        </div>
        <!-- Navigation Links -->
        <div class="flex flex-col justify-between w-full">
            <div class="nav-item pl-6 hover:bg-slate-300">
                <a href=""><li class="list-none menu-list text-2xl p-2"><i class="fa-solid fa-gauge"></i> Dashboard</li></a>
            </div>

            <div class="mt-6 space-y-1">
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
        </div>
    </div>

</nav>
