<!-- resources/views/homepage.blade.php -->
@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 
        <section class="hero">
            <div class="home-bg-blur"></div>
            <div class="home-content">
                <h1>Welcome to Robiel Prince Café {{ $username }}!</h1>
                <h2>Where every bite is a <span>little joy.</span></h2>
                <p>Savor light meals, delightful snacks, and a cozy atmosphere crafted just for you.</p>
            </div>
        </section>

        <section class="home-heading">
            <div class="heading">Our <span>Features</span></div> 

            <div class="feature">
                <div class="feature-box">
                    <img src="{{ asset('css/bfast.jpg') }}" alt="">
                    <h3>Morning Delights & Snack Staples</h3>
                    <p>
                        Start your day with our comforting breakfast classics or enjoy a quick, energizing snack. 
                        At Robiel Prince Cafe, we offer a delicious selection that balances taste and quality, perfect for any craving. 
                        Dive into our menu and discover your new favorite bite!
                    </p>
                </div>

                <div class="feature-box">
                    <img src="{{ asset('css/lunch.jpg') }}" alt="">
                    <h3>Delicious Meals & Free Soup</h3>
                    <p>
                        Enjoy our fresh, flavorful lunch and dinner options, paired with a complimentary Soup of the Day. 
                        Whether you're after a quick bite or a relaxed meal, 
                        we’ve got something to satisfy every craving.
                    </p>
                </div>

                <div class="feature-box">
                    <img src="{{ asset('css/drinks.jpg') }}" alt="">
                    <h3>Refreshing Drinks & Beverages</h3>
                    <p>
                        From energizing coffees to refreshing smoothies and indulgent shakes, our 
                        drink menu offers something for every taste. Whether you need a pick-me-up or 
                        the perfect pairing for your meal, we've got you covered!
                    </p>
                </div>
            </div>
        </section>

        <section class="best-seller">
            <div class="heading">Our <span>Best Seller</span></div> 
            <div class="seller-box"> 
                <div class="bfast">Trending <span><i class="fa-solid fa-fire"></i></span></div>
                <div class="first-section"> 

                    <div class="firstsection-box"> 
                        <img src="{{ asset('css/img1.jpg') }}" alt="">
                        <h3>Egg Sandwinch</h3>
                        <div class="price">$1.2</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <a href="#" class="check-btn">Buy</a>
                    </div>

                    <div class="firstsection-box"> 
                        <img src="{{ asset('css/img2.jpg') }}" alt="">
                        <h3>Tapsilog</h3>
                        <div class="price">$1.2</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <a href="#" class="check-btn">Buy</a>
                    </div>

                    <div class="firstsection-box"> 
                        <img src="{{ asset('css/img3.jpg') }}" alt="">
                        <h3>Pancit Bihon</h3>
                        <div class="price">$1.2</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <a href="#" class="check-btn">Buy</a>
                    </div> 
                </div>
            </div>
        </section>
@endsection
