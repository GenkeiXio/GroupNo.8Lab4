<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>Contact Us</title>

</head>
<body>
    <header class="site-header">
        <nav class="nav">
            <h1>Robiel Prince Cafe</h1>
            <b>
                <ul class="nav-list">
                    <li class="nav-item"><a href="{{ route('welcome', ['username' => $username]) }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about', ['username' => $username]) }}">About Us</a></li>
                    <li class="nav-item"><a href="{{ route('content', ['username' => $username]) }}">Content</a></li>
                    <li class="nav-item"><a href="{{ route('contact', ['username' => $username]) }}">Contact</a></li>
                </ul>
            </b>
        </nav>
    </header>
    
    <main class="site-main">
        <form action="/submit-contact" method="POST">
            @csrf
            <h1>CONTACT US</h1>
            <input type="text" id="name" placeholder="Your name" required>
            <input type="email" id="email" placeholder="Email Address" required>
            <textarea name="" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
            <input type="submit" name="" value="Send Message" class="send-btn">
        </form>
    </main>

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

