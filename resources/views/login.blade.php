<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        
       <!-- for log in form-->
        <form action="/welcome" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Enter your name" value="{{ old('username') }}" required>
            
            <!-- Display validation errors for the username -->
            @if ($errors->has('username'))
                <div class="error-message">
                    {{ $errors->first('username') }}
                </div>
            @endif
            
            <button type="submit">Login</button>
        </form>
        
        <!-- Second Form for Guest Login -->
        <form action="/welcome" method="POST">
            @csrf
            <input type="hidden" name="username" value="Guest">
            <button type="submit">Login as Guest</button>
        </form>
    </div>
</body>
</html>