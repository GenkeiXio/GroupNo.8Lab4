<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        // Check if age is set and greater than or equal to 18
        if ($request->age && $request->age >= 18) {
            return $next($request);
        }

        // If the age does not meet the condition, redirect to "Access Denied" page
        return redirect('access-denied');
    }
}

