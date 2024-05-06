<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class AdminUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        // Check if the user is authenticated
        if(Auth::check())
        {
            // Get the user's role id
            $roleId = Auth::user()->role_id;
            
            // Check if the role id is for admin (1) or subadmin (2)
            if ($roleId == 1 || $roleId == 2) {
                // Allow the request to proceed
                return $next($request);
            } else {
                // Redirect the user to the '/home' route with a flash message
                return redirect('/home')->with('status', 'You are not allowed to access the Admin Dashboard');
            }
        }
        
        // If the user is not authenticated, log them out and redirect to the homepage
        Auth::logout();
        return redirect(url(''));
    }
}