<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isModerator
{

    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if ($user->roles_id <= 2)
            return $next($request);
        else
            return redirect()->back();
    }
}
