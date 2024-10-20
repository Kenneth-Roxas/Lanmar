<div>
    {{-- Do your work, then step back. --}}

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="{{ url('CSS/home.css') }}">
        <style>
            html,
            body {
                width: 100%;
                height: 100%;
                margin: 0px;
                padding: 0px;
                overflow-x: hidden;
            }
        </style>
    </head>

    <body>

        <header><img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="bakery-img">
            <nav class="navbar">
                 <a href="{{ route('home') }}">Home</a> 
                <a href="{{route('product')}}">Product</a>
                <a href="{{route('about')}}">About</a>
                <a href="{{route('contact')}}">Contact</a>
                <span>
                    <a href="{{route('login')}}">
                        <button class="btnLogin">Log In</button>
                    </a>
                </span>
            </nav>
        </header>

        <!-- Home Section -->

        <section class="home" id="home">
            <div class="section-with-overlay">
                <div class="homeContent">
                    <h2>Lan-Mar
                        Bake Shoppe</h2>
                    <p>Tasty and Quality Breads and Cakes</p>
                    <div class="home-btn">
                        <a href="#"><button>DETAILS</button></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Home Section -->

        <section class="product-section" id="product">
            <div class="secondOverlay">
                <h2>Best-Seller Product</h2>
                <div class="slider product-row">
                    <div class="swiper-wrapper">
                        <div class="box">
                            <div class="content">
                                <div class="product-grid">
                                    <div class="product">
                                        <img src="{{ url('Picture/bongga.jpg') }}" alt="Banana Cake">
                                        <div class="image-text">
                                            <h3>Rosy Whirls</h3>
                                            <p>₱150 for 10pcs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <div class="product-grid">
                                    <div class="product">
                                        <img src="{{ url('Picture/weddingCake.jpg') }}" alt="Banana Cake">
                                        <div class="image-text">
                                            <h3>White Rose</h3>
                                            <p>Negotiable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content">
                                <div class="product-grid">
                                    <div class="product">
                                        <img src="{{ url('Picture/cringe.jpg')}}" alt="Banana Cake">
                                        <div class="image-text">
                                            <h3>Crinckles</h3>
                                            <p>₱50 for 10pcs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Product Section -->

        <section class="blogs" id="blogs">

            <div class=" swiper blogs-row">
                <div class="swiper-wrapper">
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{ url('Picture/blog-img1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Cupcakes </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla adipisci maiores ullam neque eveniet similique vero officia cum, explicabo, unde sit debitis omnis optio doloremque veniam qui reiciendis aut laboriosam.</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{ url('Picture/blog-img3.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Cakes </h3>
                            <p>Basta Description to</p>
                            <p>Description ulet</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{ url('Picture/blog-img2.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Cookies</h3>
                            <p>Basta Description to</p>
                            <p>Description ulet</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{ url('Picture/blog-img2.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Bread</h3>
                            <p>Basta Description to</p>
                            <p>Description ulet</p>
                            <a href="#blogs" class="btn">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>


        <!-- Footer -->

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




        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="{{ url('JS/home.js') }}"></script>
    </body>
</div>
