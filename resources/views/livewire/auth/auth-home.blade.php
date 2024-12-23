<div>
    {{-- Do your work, then step back. --}}
    @section('title', 'Home Page')

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <link rel="stylesheet" href="{{ url('CSS/home.css') }}">
    </head>
    <style>
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }
    </style>

    <body>

        <header
            class="fixed top-0 left-0 right-0 bg-slate-600 shadow-2xl flex items-center justify-between px-2 py-2 z-50 transition-all duration-500">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="w-20 h-20 rounded-full shadow-md">
            </div>
            <button id="menu-toggle" class="block md:hidden">
                <i class="fas fa-bars text-white"></i>
            </button>
            <nav id="menu" class="hidden md:flex space-x-7 font-semibold text-2xl">
                <a href="{{ route('home') }}"
                    class="{{ Request::routeIs('home') ? 'text-yellow-500' : 'text-gray-600' }} nav-item">Home</a>
                <a href="{{ route('product') }}"
                    class="{{ Request::routeIs('product') ? 'text-yellow-500' : 'text-white' }} nav-item">Product</a>
                <a href="{{ route('about') }}"
                    class="{{ Request::routeIs('about') ? 'text-yellow-500' : 'text-white' }} nav-item">About</a>
                <a href="{{ route('contact') }}"
                    class="{{ Request::routeIs('contact') ? 'text-yellow-500' : 'text-white' }} nav-item">Contact</a>
                <a href="{{ route('login') }}"
                    class="{{ Request::routeIs('login') ? 'text-yellow-500' : 'text-white' }} nav-item">Sign Up</a>
            </nav>
            <!-- Add to Cart Icon -->

            <div class="flex items-center space-x-4 relative">
                <!-- Cart Icon -->
                <a href="{{ route('cart') }}" class="relative">
                    <i class="fas fa-shopping-cart text-3xl text-gray-950 mt-2"></i>
                    <span class="absolute -top-2 -right-4 bg-red-600 text-xl font-bold rounded-full px-2 text-gray-50">
                        {{ $cartCount }}
                    </span>
                </a>

                <!-- User Profile -->
                <button id="user-menu-button" aria-expanded="true" class="focus:outline-none">
                    <img src="{{ Auth::check() && Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : url('Picture/default.jpg') }}"
                        class="w-16 h-16 rounded-full" alt="User Profile Picture">
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdown"
                    class="hidden absolute mt-2 right-0 text-base bg-gray-600 text-gray-50 rounded-md shadow-lg w-28">
                    <a href="{{ route('profile') }}"
                        class="w-full block px-4 py-2 hover:bg-gray-700 duration-150">Profile</a>
                    <button type="button" wire:click="logout"
                        class=" block px-4 py-2 hover:bg-gray-700 duration-150">Logout</button>
                </div>
            </div>

        </header>

        <!-- Home Section -->
        <section class="home" id="home">
            <div class="section-with-overlay">
                <div class="homeContent">
                    <h2>Lan-Mar
                        Bake Shoppe</h2>
                    <div class="home-btn">
                        <p class="mt-2">Open at Monday to Saturday <br>
                            6:00 a.m to 6:00 p.m</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Home Section -->

        <section class="product-section relative bg-white w-full h-[650px] py-10" id="product">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-600 to-transparent z-10"></div>
            <h2 class="text-4xl md:text-5xl font-bold text-white text-shadow mb-10 z-20 relative">Best-Seller Product
            </h2>
            <div class="flex flex-wrap justify-center items-center relative z-30">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Feature')
                        <div
                            class="w-96 h-full rounded-xl border-2 border-gray-300 m-6 overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <div>
                                <img class="w-full h-64 object-cover transition-transform duration-1000 transform origin-bottom hover:scale-110"
                                    src="{{ asset('storage/' . $product->image_product) }}"
                                    alt="{{ $product->product_name }}">
                            </div>
                            <div class="flex flex-col -mt-1">
                                <div
                                    class="mt-1 px-4 py-4 font-bold bg-white/20 border border-white/30 backdrop-blur-sm rounded-md shadow-md">
                                    <input type="hidden" value="{{ $product->id }}">
                                    <h3 class="text-2xl font-poppins text-gray-800">{{ $product->product_name }}</h3>
                                    <p class="text-xl text-gray-700">₱{{ $product->price }}</p>

                                    <a href="{{ route('checkout', ['id' => $product->id]) }}">
                                        <button
                                            class="buy-now-button mt-3 px-6 py-3 bg-blue-600 text-white text-xl rounded hover:bg-blue-700 transition">
                                            Buy Now
                                        </button>
                                    </a>
                                    <button type="button" wire:click="addToCart({{ $product->id }})"
                                        class="buy-now-button mt-3 px-6 py-3 bg-green-600 text-white text-xl rounded hover:bg-green-700 transition">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
        <!-- End of Product Section -->

        <section class="blogs" id="blogs">
            <div class="overlay"></div>
            <div class="swiper blogs-row">
                <div class="swiper-wrapper">
                    <div class="swiper-slide box">
                        <div class="img w-1/2 aspect-square">
                            <img src="{{ url('Picture/bongga.jpg') }}" alt="Cupcakes"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="content">
                            <h3 class="font-bold">Lan-Mar BakeShoppe Cupcakes</h3>
                            <p class="font-semibold text-2xl">Indulge in the perfect balance of flavor and freshness
                                with Lan-Mar BakeShoppe's signature cupcake. Choose from a variety of delicious options,
                                each featuring a light, fluffy cake topped with creamy buttercream frosting. Whether you
                                prefer classic vanilla, rich chocolate, or a special seasonal flavor, every bite
                                promises a sweet, unforgettable experience. Ideal for any occasion or simply as a treat,
                                our cupcakes are crafted with love and quality ingredients.</p>
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img w-1/2 aspect-square">
                            <img src="{{ url('Picture/weddingCake.jpg') }}" alt="Cupcakes"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="content">
                            <h3 class="font-bold">Lan-Mar BakeShoppe Cakes</h3>
                            <p class="font-semibold text-2xl">Celebrate life’s sweetest moments with a Lan-Mar
                                BakeShoppe Cake! Expertly baked to perfection, our cakes are known for their moist,
                                flavorful layers and rich, creamy frostings. From timeless classics like chocolate and
                                vanilla to specialty flavors like red velvet and ube, each cake is beautifully crafted
                                to impress. Whether it’s for birthdays, weddings, or everyday indulgence, a Lan-Mar
                                BakeShoppe Cake is the perfect centerpiece for your celebrations.</p>
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img w-1/2 aspect-square">
                            <img src="{{ url('Picture/cringe.jpg') }}" alt="Cupcakes"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="content">
                            <h3 class="font-bold">Lan-Mar BakeShoppe Cookies</h3>
                            <p class="font-semibold text-2xl">Treat yourself to the delightful crunch and irresistible
                                flavor of Lan-Mar BakeShoppe Cookies! Baked fresh daily, our cookies come in a variety
                                of classic and creative flavors, from gooey chocolate chip and rich double chocolate to
                                oatmeal raisin and festive seasonal specials. Perfectly crisp on the outside and soft on
                                the inside, each bite is a little piece of heaven. Ideal for snacking, sharing, or
                                gifting, our cookies are made with love and the finest ingredients to ensure every batch
                                is a true delight!</p>
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
                        </div>
                    </div>
                    <div class=" swiper-slide box">
                        <div class="img w-1/2 aspect-square">
                            <img src="{{ url('Picture/lah.jpg') }}" alt="Cupcakes"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="content">
                            <h3 class="font-bold">Lan-Mar BakeShoppe Bread</h3>
                            <p class="font-semibold text-2xl">Start your day with the warm, comforting taste of Lan-Mar
                                BakeShoppe Bread! From soft, fluffy loaves of classic white and whole wheat to artisanal
                                creations like sourdough and brioche, our breads are baked fresh daily to perfection.
                                Whether you’re making a hearty sandwich, enjoying a slice with butter, or pairing it
                                with your favorite soup, each loaf is crafted with care and high-quality ingredients for
                                a wholesome, delicious experience.</p>
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Review Section -->
        <div class="bg-gray-400 py-16 sm:py-24">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Section Header -->
                <div class="text-center mb-12">
                    <h2 class="text-5xl sm:text-7xl font-bold tracking-tight text-gray-900">Reviews</h2>
                    <p class="mt-4 text-2xl text-gray-700">Customer feedback on our products and services</p>
                </div>

                <!-- Feedback Grid -->
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($feedbacks as $feedback)
                        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col h-full">
                            <!-- Feedback Content -->
                            <p class="text-gray-800 text-2xl mb-4 line-clamp-3">{{ $feedback->feedback }}</p>

                            <!-- Customer Info -->
                            <div class="flex items-center mt-auto">
                                <img src="{{ url('Picture/default.jpg') }}" alt="Customer image"
                                    class="h-16 w-16 rounded-full bg-gray-300">
                                <div class="ml-4">
                                    <h3 class="text-2xl text-gray-900 font-semibold">{{ $feedback->name }}</h3>
                                    <p class="text-xl text-gray-600">{{$feedback->email}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Footer -->

        <footer class="footer -mt-10 bg-gray-400" id="contact">
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
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const swiper = new Swiper('.swiper', {
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    slidesPerView: 2,
                    spaceBetween: 25,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    loop: true,
                });
            });
        </script>

        <script>
            document.addEventListener('click', (event) => {
                const button = document.getElementById('user-menu-button');
                const dropdown = button.nextElementSibling;

                button.addEventListener('click', () => {
                    dropdown.classList.toggle('scale-150');
                    dropdown.classList.toggle('hidden');
                });
                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                    dropdown.classList.remove('scale-150');
                }
            });
        </script>
    </body>
</div>
