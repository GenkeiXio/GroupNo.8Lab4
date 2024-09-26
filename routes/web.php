<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Middleware;

//route for the login page at the root URL "/"
Route::get('/', function () {
    return view('goTologin', ['username' => 'Guest']);
})->name('goTologin');


//route for the welcome page with dynamic username, and view the welcome message with username
Route::get('/homepage/{username}', function ($username) {
    return view('homepage', ['username' => $username]);
})->name('homepage');

//route for the about page with dynamic username
Route::get('/aboutus/{username}', function ($username) {
    return view('aboutus', ['username' => $username]);
})->name('aboutus');

//route for the content page with dynamic username
Route::get('/menu/{username}', function ($username) {
    return view('menu', ['username' => $username]);
})->name('menu');

//route for the contact page with dynamic username
Route::get('/contactus/{username}', function ($username) {
    return view('contactus', ['username' => $username]); 
})->name('contactus');

//handles the log in form and username validation
Route::post('/homepage', function (\Illuminate\Http\Request $request) {
    // Validate that the username only contains alphabetic characters (a-z, A-Z)
    $request->validate([
        'username' => 'required|alpha'
    ], [
        'username.alpha' => 'The username should only contain alphabetic characters.',
        'username.required' => 'The username field is required.'
    ]);

    $username = $request->input('username', 'Guest');
    return redirect("/homepage/$username");
});

Route::middleware(['checkAge'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});