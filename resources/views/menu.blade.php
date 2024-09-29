<!-- resources/views/menu.blade.php -->
@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')
 
@section('content')
    <main class="content-main">
        <section class="menu">
            <div class="menu-box"> 
                <div class="bfast">Breakfast</div>
                    <div class="menu-a"> 

                        <div class="a-box"> 
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

                        <div class="a-box"> 
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

                        <div class="a-box"> 
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

                        <div class="a-box"> 
                            <img src="{{ asset('css/img1.jpg') }}" alt="">
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
    </main>
@endsection