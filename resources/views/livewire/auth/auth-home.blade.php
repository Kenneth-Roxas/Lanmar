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
            <div class="relative">
                <button id="user-menu-button" aria-expanded="true" class="focus:outline-none">
                    <img src="{{ url('Picture/default.jpg') }}" class="w-16 h-16 rounded-full"
                        alt="User Profile Picture">
                </button>
                <div id="dropdown"
                    class="absolute hidden mt-2 right-0 bg-slate-600 text-gray-50 rounded-md shadow-lg w-28">
                    <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-700 duration-150">Profile</a>
                    <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700 duration-150">Log Out</a>
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
                        <p class="mt-3">Our goal is to build a long-term relationship with our customers based on <br> trust, reliability, and mutual success.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- End of Home Section -->

        <section class="product-section relative bg-white w-full h-[650px] py-10" id="product">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-600 to-transparent z-10"></div>
            <h2 class="text-4xl md:text-5xl font-bold text-white text-shadow mb-10 z-20 relative">Best-Seller Product
            </h2>

            <div class="slider flex justify-center space-x-14 relative z-20">
                <div class="box w-96 h-96 bg-amber-200 rounded-[20px] overflow-hidden shadow-lg relative group">
                    <img src="{{ url('Picture/bongga.jpg') }}" alt="Rosy Whirls"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <h3 class="text-3xl font-bold mb-2">Rosy Whirls</h3>
                        <p class="text-xl mb-4">₱150 for 10pcs.</p>
                        <a href="{{ route('checkout') }}"><button
                                class="addCartCard bg-gradient-to-b from-gray-500 to-gray-700 text-white px-6 py-3 rounded-md hover:bg-gradient-to-t transition-all duration-300">Buy
                                Now</button></a>
                    </div>
                </div>

                <div class="box w-96 h-96 bg-amber-200 rounded-[20px] overflow-hidden shadow-lg relative group">
                    <img src="{{ url('Picture/weddingCake.jpg') }}" alt="White Rose"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <h3 class="text-3xl font-bold mb-2">White Rose</h3>
                        <p class="text-xl mb-4">Negotiable</p>
                        <a href="{{ route('booking') }}">
                            <button
                                class="addCartCard bg-gradient-to-b from-gray-500 to-gray-700 text-white px-6 py-3 rounded-md hover:bg-gradient-to-t transition-all duration-300">Book Now</button>
                        </a>
                    </div>
                </div>

                <div class="box w-96 h-96 bg-amber-200 rounded-[20px] overflow-hidden shadow-lg relative group">
                    <img src="{{ url('Picture/cringe.jpg') }}" alt="Crinckles"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <h3 class="text-3xl font-bold mb-2">Crinckles</h3>
                        <p class="text-xl mb-4">₱50 for 10pcs.</p>
                        <button
                            class="addCartCard bg-gradient-to-b from-gray-500 to-gray-700 text-white px-6 py-3 rounded-md hover:bg-gradient-to-t transition-all duration-300">Buy
                            Now</button>
                    </div>
                </div>
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

        {{-- Review Section --}}
        <div class="bg-gray-400 py-24 -mt-10 sm:py-32 mb-0 top-80">
            <div class="mx-auto max-w-full px-7 lg:px-8 -mt-10 ">
                <div class="mx-auto max-w-full lg:mx-0 ">
                    <h2
                        class="text-pretty text-6xl font-semibold tracking-tight text-gray-900 sm:text-7xl text-center">
                        Reviews</h2>
                    <p class="mt-4 text-lg/9 text-gray-800 text-center sm:text-4xl">Costumers feedback in our product
                        and services</p>
                </div>
                <div
                    class="mx-auto mt-7 grid max-w-2xl max-h-full grid-cols-1 gap-x-8 gap-y-16 border-t-4 border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex flex-col items-start justify-between max-w-xl max-h-60 mt-9">
                        <div class="flex items-center gap-x-8 text-xs">
                            <time datetime="2024-08-06" class="text-gray-700 text-2xl">August 6, 2024</time>
                            <a href="#"
                                class="relative z-10 rounded-full bg-gray-400 px-3 py-1.5 font-medium text-gray-900 hover:bg-gray-500 text-2xl">Costumer</a>
                        </div>
                        <div class="group relative">
                            <p class="mt-5 line-clamp-3 text-2xl text-gray-900">The cake from LanMar was a delightful
                                indulgence, perfectly balanced between rich flavors and a light, fluffy texture that
                                melted in each bite.</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="{{ url('Picture/gojo.jpg') }}" alt=""
                                class="h-16 w-16 rounded-full bg-gray-500">
                            <div class="text-xl">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0 text-xl"></span>
                                        1/2 Gojo Saturu
                                    </a>
                                </p>
                                <p class="text-gray-600 text-xl">Strongest Sorcerer</p>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-col items-start justify-between max-w-xl max-h-48 mt-7">
                        <div class="flex items-center gap-x-8 text-xs">
                            <time datetime="2024-08-06" class="text-gray-700 text-2xl">November 4, 2024</time>
                            <a href="#"
                                class="relative z-10 rounded-full bg-gray-400 px-3 py-1.5 font-medium text-gray-900 hover:bg-gray-500 text-2xl">Costumer</a>
                        </div>
                        <div class="group relative">
                            <p class="mt-5 line-clamp-3 text-2xl text-gray-900">The service at LanMar was exceptional,
                                with staff who were both friendly and attentive, making sure every detail was just
                                right.</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="{{ url('Picture/kenneth.jpg') }}" alt=""
                                class="h-16 w-16 rounded-full bg-gray-500">
                            <div class="text-xl">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Kenneth T. Roxas
                                    </a>
                                </p>
                                <p class="text-gray-600">3rd yr/ComSci</p>
                            </div>
                        </div>
                    </article>
                    <article class="flex flex-col items-start justify-between max-w-xl max-h-48 mt-7">
                        <div class="flex items-center gap-x-8 text-xs">
                            <time datetime="2024-08-06" class="text-gray-700 text-2xl">November 1, 2024</time>
                            <a href="#"
                                class="relative z-10 rounded-full bg-gray-400 px-3 py-1.5 font-medium text-gray-900 hover:bg-gray-500 text-2xl">Costumer</a>
                        </div>
                        <div class="group relative">
                            <p class="mt-5 line-clamp-3 text-2xl text-gray-900">LanMar's bread had an incredibly soft
                                interior with a crispy golden crust, offering the perfect blend of texture and warmth in
                                every slice</p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="{{ url('Picture/okarun.jpg') }}" alt=""
                                class="h-16 w-16 rounded-full bg-gray-500">
                            <div class="text-xl">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Ken Takakura
                                    </a>
                                </p>
                                <p class="text-gray-600">Occult</p>
                            </div>
                        </div>
                    </article>
                    <!-- More posts... -->
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
                        delay: 4500,
                        disableOnInteraction: false,
                    },
                    slidesPerView: 2,
                    spaceBetween: 30,
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

                // Toggle dropdown visibility on button click
                button.addEventListener('click', () => {
                    dropdown.classList.toggle('scale-150');
                    dropdown.classList.toggle('hidden');
                });

                // Close dropdown if clicked outside
                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                    dropdown.classList.remove('scale-150');
                }
            });
        </script>
    </body>
</div>