<!-- resources/views/goTologin.blade.php -->
@extends('Components.Layout')

@section('title', 'Log in')
 
@section('content')
    <main class="login-main">
        <div class="background-blur"></div>
        <div class="login-container">
            <h1>Login</h1>
            
        <!-- for log in form-->
            <form action="/homepage" method="POST">
                @csrf
                <input type="text" name="username" placeholder="Enter your name" value="{{ old('username') }}" required>
                <div class="age_confirmationForm">
                    <h5>Are you 18 years old and above?</h5>

                    <div class="checkbox-group">
                        <input type="checkbox" id="check1" name="check1" value="yes">
                        <label for="check1">Yes</label>

                        <input type="checkbox" id="check2" name="check2" value="no">
                        <label for="check1">No</label>
                    </div>

                </div>
                
                <!-- Display validation errors for the username -->
                @if ($errors->has('username'))
                    <div class="error-message">
                        {{ $errors->first('username') }}
                    </div>
                @endif
                
                <button type="submit">Login</button>
            </form>
            
            <!-- Second Form for Guest Login -->
            <form action="/homepage" method="POST">
                @csrf
                <input type="hidden" name="username" value="Guest">
                <button type="submit">Login as Guest</button>
            </form>
        </div>
    </main>
@endsection
