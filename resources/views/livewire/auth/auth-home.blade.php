<div>
    {{-- Do your work, then step back. --}}

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
            class="fixed top-0 left-0 right-0 bg-transparent shadow-2xl flex items-center justify-between px-6 py-6 z-50 transition-all duration-500"
            id="navbar">
            <img src="{{ url('Picture/lanmar.png') }}" alt="logo"
                class="w-20 h-20 rounded-full border border-gray-300 shadow-md">

            <nav class="flex items-center space-x-10">
                <a href="{{ route('home') }}"
                    class="text-2xl font-semibold text-white hover:text-gray-900 transition duration-300">Home</a>
                <a href="{{ route('product') }}"
                    class="text-2xl font-semibold text-white hover:text-gray-900 transition duration-300">Product</a>
                <a href="{{ route('about') }}"
                    class="text-2xl font-semibold text-white hover:text-gray-900 transition duration-300">About</a>
                <a href="{{ route('contact') }}"
                    class="text-2xl font-semibold text-white hover:text-gray-900 transition duration-300">Contact</a>
                <div class="relative ml-3">
                    <button type="button"
                        class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-14 w-14 rounded-full" src="{{ url('Picture/default.jpg') }}"
                            alt="User Profile Picture">
                    </button>

                    <!-- Profile dropdown -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-slate-600 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none transition-all duration-200 ease-out scale-0 group-hover:scale-100"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{route('profile')}}"
                            class="block px-4 py-2 text-lg text-gray-300 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-lg text-gray-300 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="{{route('login')}}"
                            class="block px-4 py-2 text-lg text-gray-300 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
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
                        <a href="{{ route('about') }}"><button>DETAILS</button></a>
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
                        <a href="{{route('checkout')}}"><button
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
                        <a href="https://www.facebook.com/profile.php?id=100063785664939">
                            <button
                                class="addCartCard bg-gradient-to-b from-gray-500 to-gray-700 text-white px-6 py-3 rounded-md hover:bg-gradient-to-t transition-all duration-300">Contact
                                Us</button>
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
            <div class=" swiper blogs-row">
                <div class="swiper-wrapper">
                    <div class=" swiper-slide box">
                        <div class="img">
                            <img src="{{ url('Picture/blog-img1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3>Cupcakes </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla adipisci maiores ullam
                                neque eveniet similique vero officia cum, explicabo, unde sit debitis omnis optio
                                doloremque veniam qui reiciendis aut laboriosam.</p>
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
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
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
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
                            <a href="{{ route('product') }}" class="btn">Order Now</a>
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
                                class="relative z-10 rounded-full bg-gray-400 px-3 py-1.5 font-medium text-gray-900 hover:bg-gray-900 text-2xl">Costumer</a>
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
                                class="relative z-10 rounded-full bg-gray-400 px-3 py-1.5 font-medium text-gray-900 hover:bg-gray-900 text-2xl">Costumer</a>
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
                                class="relative z-10 rounded-full bg-gray-400 px-3 py-1.5 font-medium text-gray-900 hover:bg-gray-900 text-2xl">Costumer</a>
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
                    dropdown.classList.remove('scale-100');
                }
            });
        </script>
    </body>
</div>