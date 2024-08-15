<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the authenticated user is an admin (role = 2)
        if (Auth::check() && Auth::user()->role == 2) {
            // Allow the request to proceed
            return $next($request);
        }

        // If the user is not an admin, return an error response
        return back()->with('error', 'You are not an admin.');
    }
}
