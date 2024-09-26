<!-- resources/views/Components/Layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <nav class="nav">
            <div class= "logo">
                <h3>Robiel Prince Cafe</h3>
            </div>
            <b>
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('homepage', ['username' => $username]) }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('menu', ['username' => $username]) }}">Menu</a></li>
                    <li class="nav-item"><a href="{{ route('aboutus', ['username' => $username]) }}">About Us</a></li>
                    <li class="nav-item"><a href="{{ route('contactus', ['username' => $username]) }}">Contact Us</a></li>
                </ul>
            </b>
        </nav>
    </header>

    <main>
        <!-- This is where the content of the child views will be displayed -->
        @yield('content') <!--call the webpages to display its content-->
    </main>

    <!-- Add your footer here if needed -->
    <footer class="site-footer">
        <b>
            <p>&copy; 2024 Robiel Prince Cafe. All Rights Reserved.</p>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/princelouis.jaylo.1">Facebook</a></li>
                <li><a href="https://www.instagram.com/genkeiyoshi/">Instagram</a></li>
                <li><a href="https://x.com/LouisJaylo">Twitter</a></li>
            </ul>
        </b>
    </footer>
</body>
</html>
