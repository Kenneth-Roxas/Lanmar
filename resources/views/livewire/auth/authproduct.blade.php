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
                <img src="{{ url('Picture/lanmar.png') }}" alt="logo" class="w-20 h-20 rounded-full shadow-md">
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
            <div class="flex justify-center items-center mt-10">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Feature')
                        <div class="card">
                            <div class="image">
                                <a href="{{ route('checkout') }}">
                                    <img src="{{ asset('storage/' . $product->image_product) }}"
                                        alt="{{ $product->product_name }}">
                                </a>
                            </div>
                            <div class="content -mt-2">
                                <div class="title">
                                    <h3>{{ $product->product_name }}</h3>
                                    <p class="price">₱{{ $product->price }}</p>
                                    <a href="{{ route('checkout') }}"><button class="addCartCard">Buy Now</button></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Cake Section -->
        <section class="cakes bg-gradient-to-b from-gray-500 via-gray-700 to-gray-800">
            <h2 class="section-title">Cake Section</h2>
            <div class="cake-product">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Cake')
                        <div class="card">
                            <div class="image">
                                <a href="{{ route('booking')}}">
                                    <img src="{{ asset('storage/' . $product->image_product) }}"
                                        alt="{{ $product->product_name }}">
                                </a>
                            </div>
                            <div class="content -mt-2">
                                <div class="title">
                                    <h3>{{ $product->product_name }}</h3>
                                    <p class="price">₱{{ $product->price }}</p>
                                    <a href="{{ route('booking') }}"><button class="addCartCard">Buy Now</button></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Cupcake Section -->
        <section class="cupcake bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500">
            <h2>Cupcakes Section</h2>
            <div class="cupcake-product">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Cupcake')
                        <div class="card">
                            <div class="image">
                                <a href="{{ route('checkout')}}">
                                    <img src="{{ asset('storage/' . $product->image_product) }}"
                                        alt="{{ $product->product_name }}">
                                </a>
                            </div>
                            <div class="content -mt-2">
                                <div class="title">
                                    <h3>{{ $product->product_name }}</h3>
                                    <p class="price">₱{{ $product->price }}</p>
                                    <a href="{{ route('checkout') }}"><button class="addCartCard">Buy Now</button></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Cookies -->
        <section class="cookies bg-gradient-to-b from-gray-500 via-gray-700 to-gray-800">
            <h2>Cookies Section</h2>
            <div class="cookies-product">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Cookies')
                        <div class="card">
                            <div class="image">
                                <a href="{{ route('checkout') }}">
                                    <img src="{{ asset('storage/' . $product->image_product) }}"
                                        alt="{{ $product->product_name }}">
                                </a>
                            </div>
                            <div class="content -mt-2">
                                <div class="title">
                                    <h3>{{ $product->product_name }}</h3>
                                    <p class="price">₱{{ $product->price }}</p>
                                    <a href="{{ route('checkout') }}"><button class="addCartCard">Buy Now</button></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Other Product -->

        <section class="other bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500">
            <h2>Other Product</h2>
            <div class="other-product">
                    @foreach ($products as $product)
                        @if ($product->category_name === 'Other')
                            <div class="card">
                                <div class="image">
                                    <a href="{{ route('checkout') }}">
                                        <img src="{{ asset('storage/' . $product->image_product) }}"
                                            alt="{{ $product->product_name }}">
                                    </a>
                                </div>
                                <div class="content -mt-2">
                                    <div class="title">
                                        <h3>{{ $product->product_name }}</h3>
                                        <p class="price">₱{{ $product->price }}</p>
                                        <a href="{{ route('checkout') }}"><button class="addCartCard">Buy Now</button></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
        </section>

        <script src="{{ url('JS/product.js') }}"></script>
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
