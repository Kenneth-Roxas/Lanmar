<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @section('title', 'Product Page')
    <link rel="stylesheet" href="{{ url('CSS/product.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body>

        <div class="background-overlay"></div>

        <header
            class="fixed top-0 left-0 right-0 bg-slate-700 shadow-2xl flex items-center justify-between px-4 py-4 z-50 transition-all duration-500">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="logo"
                    class="w-20 h-20 rounded-full shadow-md">
            </div>
            <button id="menu-toggle" class="block md:hidden">
                <i class="fas fa-bars text-white"></i>
            </button>
            <nav id="menu" class="hidden md:flex space-x-7 font-semibold text-2xl">
                <a href="{{ route('home') }}"
                    class="{{ Request::routeIs('home') ? 'text-yellow-500' : 'text-white' }} nav-item">Home</a>
                <a href="{{ route('product') }}"
                    class="{{ Request::routeIs('product') ? 'text-yellow-500' : 'text-white' }} nav-item">Product</a>
                <a href="{{ route('about') }}"
                    class="{{ Request::routeIs('about') ? 'text-yellow-500' : 'text-white' }} nav-item">About</a>
                <a href="{{ route('contact') }}"
                    class="{{ Request::routeIs('contact') ? 'text-yellow-500' : 'text-white' }} nav-item">Contact</a>
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

        <!-- featured section -->
        <section class="featured bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500" id="featured">
            <div class="container-line">
                <div class="text-1">
                    <h2>POPULAR</h2>
                    <p>Most ordered right now</p>
                </div>
            </div>

            <div class="cards" data-product-id="1">
                <div class="card">
                    <div class="image">
                        <a href="{{ route('overview') }}"><img src="{{ url('Picture/bongga.jpg') }}"></a>
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
                        <img src="{{ url('Picture/cringe.jpg') }}">
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
                        <img src="{{ url('Picture/lah.jpg') }}">
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
            </div>
        </section>

        <!-- Cake Section -->
        <section class="cakes bg-gradient-to-b from-gray-500 via-gray-700 to-gray-800">
            <h2>Cakes Section</h2>
            <div class="cake-product">
                <div class="box">
                    <div class="cake-image">
                        <img src="{{ url('Picture/product1.jpg') }}">
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
                        <img src="{{ url('Picture/numeric cake.jpg') }}">
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
                        <img src="{{ url('Picture/bday.jpg') }}">
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
                        <img src="{{ url('Picture/gento.jpg') }}">
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
                        <img src="{{ url('Picture/fondant.jpg') }}">
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
        <section class="cupcake bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500">
            <h2>Cupcakes Section</h2>
            <div class="cupcake-product">
                <div class="cupcake-box">
                    <div class="cupcake-image">
                        <img src="{{ url('Picture/bongga.jpg') }}">
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
                        <img src="{{ url('Picture/trip.jpg') }}">
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
                        <img src="{{ url('Picture/nda.jpg') }}">
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
                        <img src="{{ url('Picture/kabayan.jpg') }}">
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
        <section class="cookies bg-gradient-to-b from-gray-500 via-gray-700 to-gray-800">
            <h2>Cookies Section</h2>
            <div class="cookies-product">
                <div class="cookies-box">
                    <div class="cookies-image">
                        <img src="{{ url('Picture/cringe.jpg') }}">
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
                        <img src="{{ url('Picture/meingue.jpg') }} ">
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
                        <img src="{{ url('Picture/hopia.jpg') }}">
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

        <section class="other bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500">
            <h2>Other Product</h2>
            <div class="other-product">
                <div class="other-box">
                    <div class="other-image">
                        <img src="{{ url('Picture/rolls.jpg') }}">
                    </div>
                    <div class="other-title">
                        <h3>Chocolate Rolls</h3>
                        <p>₱250</p>
                        <button class="addCartCard">Order Now</button>
                    </div>
                </div>
                <div class="other-box">
                    <div class="other-image">
                        <img src="{{ url('Picture/donut.jpg') }}">
                    </div>
                    <div class="other-title">
                        <h3>LanMar Donuts</h3>
                        <p>₱100</p>
                        <button class="addCartCard">Order Now</button>
                    </div>
                </div>
                <div class="other-box">
                    <div class="other-image">
                        <img src="{{ url('Picture/spread.jpg') }}">
                    </div>
                    <div class="other-title">
                        <h3>LanMar Spreads</h3>
                        <p>₱75</p>
                        <button class="addCartCard">Order Now</button>
                    </div>
                </div>
                <div class="other-box">
                    <div class="other-image">
                        <img src="{{ url('Picture/rolls1.jpg') }}">
                    </div>
                    <div class="other-title">
                        <h3>Cherry Rolls</h3>
                        <p>₱250</p>
                        <button class="addCartCard">Order Now</button>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ url('JS/product.js') }}"></script>
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
