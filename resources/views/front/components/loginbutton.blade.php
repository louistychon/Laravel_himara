
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-book mt-0 p-1">Account</button></a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><button class="btn btn-book mt-0 p-1">Log in</button></a>
            @endauth
        </div>
    @endif
