<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the birthdate from the form input
        $birthDate = $request->input('birthday');

        // Check if birthdate is provided
        if (!$birthDate) {
            // Redirect to Access Denied if the birthdate is missing
            return redirect('/accessDenied')->with('error', 'Birthdate is required.');
        }

        // Parse the birthdate and validate the format
        try {
            $age = Carbon::parse($birthDate)->age;
        } catch (\Exception $e) {
            // Invalid birthdate format
            return redirect('/accessDenied')->with('error', 'Invalid birthdate format.');
        }

        // Check if the user is under 18
        if ($age < 18) {
            // Redirect to Access Denied page if under 18
            return redirect('/accessDenied')->with('error', 'You must be 18 or older to access this page.');
        }

        // Proceed if 18 or older
        return $next($request);
    }
}