<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <link rel="stylesheet" href="{{ url('CSS/product.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body>

        <header>
            <img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="bakery-img">
            <nav class="navbar">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{route('product')}}">Product</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('contact')}}">Contact</a>
                <span>
            </nav>
            <img src="{{ url('Picture/profile.png') }}" alt="Profile" class="profile-img">
            <div class="online-dot"></div>
</header>

<!-- featured section -->
<section class="featured">
    <div class="overlay"></div>
    <div class="container-line">
        <div class="text-1">
            <h2>FEATURED</h2>
            <p>Most ordered right now</p>
        </div>
    </div>

    <div class="cards" data-product-id="1">
        <div class="card">
            <div class="image">
                <img src="{{ url('Picture/bongga.jpg') }}">
            </div>
            <div class="content">
                <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="title">
                    <h3>Rosy Whirls</h3>
                    <p>₱150</p>
                    <button class="addCartCard">Buy Now</button>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="image">
                <img src="{{ url('Picture/Untitled design.png') }}">
            </div>
            <div class="content">
                <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="title">
                    <h3>Blossom in Twilight</h3>
                    <p>₱6,000</p>
                    <button class="addCartCard">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img src="{{ url('Picture/cringe.jpg')}}">
            </div>
            <div class="content">
                <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="title">
                    <h3>Crinckels</h3>
                    <p>₱50</p>
                    <button class="addCartCard">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="{{ url('Picture/lah.jpg')}}">
            </div>
            <div class="content">
                <div class="star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="title">
                    <h3>Siopao!</h3>
                    <p>₱30</p>
                    <button class="addCartCard">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="load-more-container">
            <button class="load-more-btn">Load More</button>
        </div>
    </div>
</section>

<!-- Cake Section -->
<section class="cakes">
    <h2>Cakes Section</h2>
    <div class="cake-product">
        <div class="box">
            <div class="cake-image">
                <img src="{{ url('Picture/product1.jpg')}}">
            </div>
            <div class="cake-content">
                <div class="cake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cake-title">
                    <h3>Wedding Cake</h3>
                    <p>₱5,000 - ₱8,000</p>
                    <button class="addCartCard">Book Now</button>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="cake-image">
                <img src="{{ url('Picture/numeric cake.jpg')}}">
            </div>
            <div class="cake-content">
                <div class="cake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cake-title">
                    <h3>Numeric Cake</h3>
                    <p>₱550 - ₱2,550</p>
                    <button class="addCartCard">Book Now</button>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="cake-image">
                <img src="{{ url('Picture/bday.jpg')}}">
            </div>
            <div class="cake-content">
                <div class="cake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cake-title">
                    <h3>Birthday Cake</h3>
                    <p>₱1,000 - ₱2,500</p>
                    <button class="addCartCard">Book Now</button>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="cake-image">
                <img src="{{ url('Picture/gento.jpg')}}">
            </div>
            <div class="cake-content">
                <div class="cake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cake-title">
                    <h3>Bento Cake</h3>
                    <p>₱500 - ₱999</p>
                    <button class="addCartCard">Book Now</button>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="cake-image">
                <img src="{{ url('Picture/fondant.jpg')}}">
            </div>
            <div class="cake-content">
                <div class="cake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cake-title">
                    <h3>Fondant Cake</h3>
                    <p>₱999 - ₱2,000</p>
                    <button class="addCartCard">Book Now</button>
                </div>
            </div>
        </div>
        <div class="load-more-container">
            <button class="load-more-btn">Load More</button>
        </div>
    </div>
</section>

<!-- Cupcake Section -->
<section class="cupcake">
    <h2>Cupcakes Section</h2>
    <div class="cupcake-product">
        <div class="cupcake-box">
            <div class="cupcake-image">
                <img src="{{ url('Picture/bongga.jpg')}}">
            </div>
            <div class="cupcake-content">
                <div class="cupcake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cupcake-title">
                    <h3>Rosy Whirls</h3>
                    <p>₱150</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="cupcake-box">
            <div class="cupcake-image">
                <img src="{{ url('Picture/trip.jpg')}}">
            </div>
            <div class="cupcake-content">
                <div class="cupcake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cupcake-title">
                    <h3>Customize Design</h3>
                    <p>₱200</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="cupcake-box">
            <div class="cupcake-image">
                <img src="{{ url('Picture/nda.jpg')}}">
            </div>
            <div class="cupcake-content">
                <div class="cupcake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cupcake-title">
                    <h3>Valentine's Cupcake</h3>
                    <p>₱150</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="cupcake-box">
            <div class="cupcake-image">
                <img src="{{ url('Picture/kabayan.jpg')}}">
            </div>
            <div class="cupcake-content">
                <div class="cupcake-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cupcake-title">
                    <h3>Kabayan Cupcake</h3>
                    <p>₱5 each</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="load-more-container">
            <button class="load-more-btn">Load More</button>
        </div>
    </div>
</section>

<!-- Cookies -->
<section class="cookies">
    <h2>Cookies Section</h2>
    <div class="cookies-product">
        <div class="cookies-box">
            <div class="cookies-image">
                <img src="{{ url('Picture/cringe.jpg')}}">
            </div>
            <div class="cookies-content">
                <div class="cookies-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cookies-title">
                    <h3>Crinckels</h3>
                    <p>₱50</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="cookies-box">
            <div class="cookies-image">
                <img src="{{ url('Picture/meingue.jpg')}} ">
            </div>
            <div class="cookies-content">
                <div class="cookies-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cookies-title">
                    <h3>Pacencia Cookie</h3>
                    <p>₱50</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="cookies-box">
            <div class="cookies-image">
                <img src="{{ url('Picture/hopia.jpg')}}">
            </div>
            <div class="cookies-content">
                <div class="cookies-star">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <div class="cookies-title">
                    <h3>Filipino Hopia</h3>
                    <p>₱50</p>
                    <button class="addCartCard">Order Now</button>
                </div>
            </div>
        </div>
        <div class="load-more-container">
            <button class="load-more-btn">Load More</button>
        </div>
    </div>
</section>

<!-- Other Product -->

<section class="other">
    <h2>Other Product</h2>
    <div class="other-product">
        <div class="other-box">
            <div class="other-image">
                <img src="{{ url('Picture/rolls.jpg')}}">
            </div>
            <div class="other-title">
                <h3>Chocolate Rolls</h3>
                <p>₱250</p>
                <button class="addCartCard">Order Now</button>
            </div>
        </div>
        <div class="other-box">
            <div class="other-image">
                <img src="{{ url('Picture/donut.jpg')}}">
            </div>
            <div class="other-title">
                <h3>LanMar Donuts</h3>
                <p>₱100</p>
                <button class="addCartCard">Order Now</button>
            </div>
        </div>
        <div class="other-box">
            <div class="other-image">
                <img src="{{ url('Picture/spread.jpg')}}">
            </div>
            <div class="other-title">
                <h3>LanMar Spreads</h3>
                <p>₱75</p>
                <button class="addCartCard">Order Now</button>
            </div>
        </div>
        <div class="other-box">
            <div class="other-image">
                <img src="{{ url('Picture/rolls1.jpg')}}">
            </div>
            <div class="other-title">
                <h3>Cherry Rolls</h3>
                <p>₱250</p>
                <button class="addCartCard">Order Now</button>
            </div>
        </div>
    </div>
</section>

<footer class="footer" id="contact">
    <div class="share">
        <a href="https://www.facebook.com/profile.php?id=100063785664939" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-instagram"></a>
        <a href="" class="fab fa-twitter"></a>
    </div>
    <div class="credit">
        <strong><em>© LAN-MAR Bake Shoppe | All Right Reserved</em></strong>
    </div>
</footer>
</body>
</div>
