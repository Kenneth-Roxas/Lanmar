<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @section('title', 'Product Page')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <body>
        <header class="flex items-center justify-between px-6 py-3 bg-gray-700 shadow-lg fixed top-0 w-full z-50">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lanmar BakeShoppe Logo" class="w-12 h-12 rounded-full">
            </div>
            <button id="menu-toggle" class="block md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <nav id="menu" class="hidden md:flex space-x-5 font-semibold">
                <a href="{{ route('home') }}"
                    class="{{ Request::routeIs('home') ? 'text-yellow-500' : 'text-white' }}">Home</a>
                <a href="{{ route('product') }}"
                    class="{{ Request::routeIs('product') ? 'text-yellow-500' : 'text-white' }}">Product</a>
                <a href="{{ route('about') }}"
                    class="{{ Request::routeIs('about') ? 'text-yellow-500' : 'text-white' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="{{ Request::routeIs('contact') ? 'text-yellow-500' : 'text-white' }}">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <!-- Add to Cart Icon -->
                <a href="{{ route('cart') }}" class="text-white relative">
                    <i class="fas fa-shopping-cart text-lg text-gray-950"></i>
                    {{-- @if (Cart::count() > 0)  --}}
                    <span
                        class="absolute -top-2 -right-3 bg-transparent text-xs font-bold rounded-full px-1 text-gray-50">(1)</span>
                    {{-- {{ Cart::count() }} --}}
                    {{-- @endif --}}
                </a>
                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button id="user-menu-button" class="focus:outline-none">
                        <img src="{{ url('Picture/default.jpg') }}" alt="User Profile Picture"
                            class="w-10 h-10 rounded-full">
                    </button>
                    <div id="dropdown"
                        class="hidden absolute mt-2 right-0 text-base bg-gray-600 text-gray-50 rounded-md shadow-lg w-28">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-700">Profile</a>
                        <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700">Log In</a>
                        <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700">Log Out</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- featured section -->
        <section class="h-screen bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500" id="featured">
            <div class="mx-auto text-center py-4">
                <h2 class="text-4xl font-bold text-white mt-14">POPULAR</h2>
                <p class="text-lg text-gray-300">Most ordered right now</p>
            </div>
            <div class="flex flex-wrap justify-center items-center mt-2 relative z-30">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Feature')
                        <div>
                            @if ($message)
                                <div class="mt-4 p-2 text-white rounded-md"
                                    :class="{
                                        'bg-green-500': '{{ $messageType }}'
                                        === 'success',
                                        'bg-yellow-500': '{{ $messageType }}'
                                        === 'info',
                                        'bg-red-500': '{{ $messageType }}'
                                        === 'error'
                                    }">
                                    {{ $message }}
                                </div>
                            @endif
                        </div>

                        <div
                            class="w-60 rounded-xl border-2 border-gray-300 m-4 overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <div>
                                <img class="w-full h-44 object-cover transition-transform duration-1000 transform origin-bottom hover:scale-110"
                                    src="{{ asset('storage/' . $product->image_product) }}"
                                    alt="{{ $product->product_name }}">
                            </div>
                            <div class="flex flex-col -mt-2">
                                <div
                                    class="mt-1 px-2 py-3 font-bold bg-white/20 border border-white/30 backdrop-blur-sm rounded-md shadow-md">
                                    <input type="hidden" value="{{ $product->id }}">
                                    <h3 class="text-lg font-poppins text-gray-800">{{ $product->product_name }}</h3>
                                    <p class="text-sm text-gray-700">₱{{ $product->price }}</p>

                                    <a href="{{ route('checkout', ['id' => $product->id]) }}">
                                        <button class="buy-now-button mt-2 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                            Buy Now
                                        </button></a>
                                    <button type="button" wire:click="addToCart({{ $product->id }})"
                                        class="buy-now-button mt-2 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


        </section>


        <!-- Cake Section -->
        <section class="h-screen bg-gradient-to-b from-gray-500 via-gray-700 to-gray-800">
            <div class="mx-auto text-left py-4">
                <h2 class="text-3xl font-semibold text-white mt-14 ml-16">CAKE PRODUCT</h2>
            </div>
            <div class="flex flex-wrap justify-center items-center mt-2 relative z-30">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Cake')
                        <div
                            class="w-60 rounded-xl border-2 border-gray-300 m-4 overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <div>
                                <img class="w-full h-44 object-cover transition-transform duration-1000 transform origin-bottom hover:scale-110"
                                    src="{{ asset('storage/' . $product->image_product) }}"
                                    alt="{{ $product->product_name }}">
                            </div>
                            <div class=" flex flex-col -mt-2">
                                <div
                                    class=" mt-1 px-2 py-3 font-bold bg-white/20 border border-white/30 backdrop-blur-sm rounded-md shadow-md">
                                    <h3 class="text-lg font-poppins text-gray-800">{{ $product->product_name }}</h3>
                                    <p class="text-sm text-gray-700">₱{{ $product->price }}</p>
                                    <button wire:click="booking"
                                        class="book-now-button mt-2 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Cupcake Section -->
        <section class="h-screen bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500" id="featured">
            <div class="mx-auto text-left py-4">
                <h2 class="text-3xl font-semibold text-white mt-14 ml-16">CUPCAKE PRODUCT</h2>
            </div>
            <div class="flex flex-wrap justify-center items-center mt-2 relative z-30">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Cupcake')
                        <div
                            class="w-60 rounded-xl border-2 border-gray-300 m-4 overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <div>
                                <img class="w-full h-44 object-cover transition-transform duration-1000 transform origin-bottom hover:scale-110"
                                    src="{{ asset('storage/' . $product->image_product) }}"
                                    alt="{{ $product->product_name }}">
                            </div>
                            <div class="flex flex-col -mt-2">
                                <div
                                    class="mt-1 px-2 py-3 font-bold bg-white/20 border border-white/30 backdrop-blur-sm rounded-md shadow-md">
                                    <h3 class="text-lg font-poppins text-gray-800">{{ $product->product_name }}</h3>
                                    <p class="text-sm text-gray-700">₱{{ $product->price }}</p>

                                    <!-- Quantity Selector -->
                                    <div class="flex items-center mt-3 space-x-2">
                                        <button type="button" wire:click="decrementQuantity"
                                            class="px-2 py-1 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                                            -
                                        </button>
                                        <span class="text-sm text-gray-800">{{ $quantityCount }}</span>
                                        <button type="button" wire:click="incrementQuantity"
                                            class="px-2 py-1 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                                            +
                                        </button>
                                    </div>

                                    <!-- Add To Cart Button -->
                                    <button type="button" wire:click="addToCart({{ $product->id }})"
                                        class="buy-now-button mt-3 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </section>

        <!-- Cookies -->
        <section class="h-screen bg-gradient-to-b from-gray-500 via-gray-700 to-gray-800">
            <div class="mx-auto text-left py-4">
                <h2 class="text-3xl font-semibold text-white mt-14 ml-16">COOKIES PRODUCT</h2>
            </div>
            <div class="flex flex-wrap justify-center items-center mt-2 relative z-30">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Cookies')
                        <div
                            class="w-60 rounded-xl border-2 border-gray-300 m-4 overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <div>
                                <img class="w-full h-44 object-cover transition-transform duration-1000 transform origin-bottom hover:scale-110"
                                    src="{{ asset('storage/' . $product->image_product) }}"
                                    alt="{{ $product->product_name }}">
                            </div>
                            <div class="flex flex-col -mt-2">
                                <div
                                    class="mt-1 px-2 py-3 font-bold bg-white/20 border border-white/30 backdrop-blur-sm rounded-md shadow-md">
                                    <h3 class="text-lg font-poppins text-gray-800">{{ $product->product_name }}</h3>
                                    <p class="text-sm text-gray-700">₱{{ $product->price }}</p>

                                    <!-- Add To Cart Button -->
                                    <button type="button" wire:click="addToCart({{ $product->id }})"
                                        class="buy-now-button mt-3 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                        Add To Cart
                                    </button>
                                    <!-- Decrement Button -->
                                    <button type="button" wire:click="decrementQuantity"
                                        class="px-2 py-1 bg-slate-700 text-gray-50 rounded-l-md hover:bg-slate-600 transition duration-300 ease-in-out">
                                        -
                                    </button>

                                    <!-- Quantity Display -->
                                    <span
                                        class="px-2 py-1 -ml-1 text-base font-semibold text-gray-50 bg-slate-700 border border-slate-600 rounded-md">
                                        {{ $quantityCount }}
                                    </span>

                                    <!-- Increment Button -->
                                    <button type="button" wire:click="incrementQuantity"
                                        class="px-2 py-1 bg-slate-700 text-gray-50 rounded-r-md hover:bg-slate-600 transition duration-300 ease-in-out">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <!-- Other Product -->
        <section class="h-screen bg-gradient-to-b from-gray-800 via-gray-700 to-gray-500" id="featured">
            <div class="mx-auto text-left py-4">
                <h2 class="text-3xl font-semibold text-white mt-14 ml-16">CUPCAKE PRODUCT</h2>
            </div>
            <div class="flex flex-wrap justify-center items-center mt-2 relative z-30">
                @foreach ($products as $product)
                    @if ($product->category_name === 'Other')
                        <div
                            class="w-60 rounded-xl border-2 border-gray-300 m-4 overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                            <div>
                                <img class="w-full h-44 object-cover transition-transform duration-1000 transform origin-bottom hover:scale-110"
                                    src="{{ asset('storage/' . $product->image_product) }}"
                                    alt="{{ $product->product_name }}">
                            </div>
                            <div class=" flex flex-col -mt-2">
                                <div
                                    class=" mt-1 px-2 py-3 font-bold bg-white/20 border border-white/30 backdrop-blur-sm rounded-md shadow-md">
                                    <h3 class="text-lg font-poppins text-gray-800">{{ $product->product_name }}</h3>
                                    <p class="text-sm text-gray-700">₱{{ $product->price }}</p>
                                    <button type="button" wire:click="addToCart({{ $product->id }})"
                                        class="buy-now-button mt-2 px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>


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
