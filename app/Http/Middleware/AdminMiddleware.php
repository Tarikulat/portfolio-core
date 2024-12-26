<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and is an admin
        if (!auth()->check() || !auth()->user()->is_admin) {
            return redirect('/');  // Redirect non-admins to home
        }

        return $next($request);  // Allow the request to proceed if the user is an admin
    }
}


