
    @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-book mt-0 p-1"><i class="fa fa-user"></i>Account</button></a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-book mt-0 p-1"> <i class="fa fa-user"></i>Log in</button></a>
            @endauth
    @endif
