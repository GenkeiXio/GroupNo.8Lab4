<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <title>AboutPage</title>
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

    <main class="about-main">
        <section class="intro-section">
            <h1>About Robiel Prince Cafe</h1>
        </section>

        <section class="about-section">
            <div class="about-content">
                <div class="text-container">
                    <h2>Introduction</h2>
                    <p>
                        Located in Centro, Guinobatan, Albay Robiel Prince Cafe is a small cafe serving light meals and snacks. 
                        It is managed by the owners, the <b><u>Jaylo Family</u></b>: <b><u>Rob</u></b>erto, C<b><u>iel</u></b>o, 
                        <b><u>Prince</u></b> Louis where that name of the cafe was taken from.
                    </p>
                </div>
            </div>

            <div class="about-content">
                <div class="text-container">
                    <h2>Product Services</h2>
                    <p>
                        Robiel Prince Cafe will be open from <b>7:00 a.m</b> to <b>10:00 p.m</b>. It will cater snacks and serve light meals
                        through <b><u>Breakfast</u></b> and <b><u>Lunch</u></b> hours, occasionally staying open for <b>Dinner</b>, for\
                        dine in customers and also for takeouts.
                    </p>
                </div> 
            </div>

            <div class="about-content">
                <div class="text-container">
                    <h2>Our Values</h2>
                    <ul>
                        <li>Quality: We use only the finest ingredients.</li>
                        <li>Community: We aim to be a hub for the local community.</li>
                        <li>Sustainability: We are committed to eco-friendly practices.</li>
                        <li>Innovation: We constantly seek to improve our offerings.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <b>
                <p>&copy; 2024 Robiel Prince Cafe. All Rights Reserved.</p>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/princelouis.jaylo.1">Facebook</a></li>
                    <li><a href="https://www.instagram.com/genkeiyoshi/">Instagram</a></li>
                    <li><a href="https://x.com/LouisJaylo">Twitter</a></li>
                </ul>
            </b>
        </div>
    </footer>
</body>
</html>