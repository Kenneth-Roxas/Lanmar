<div>

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
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
                <span class="absolute -top-2 -right-3 bg-red-600 text-xs font-bold rounded-full px-1 text-gray-50">
                    {{ $cartCount }}
                </span>
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
                    <button wire:click="logout" class=" block px-4 py-2 hover:bg-gray-700 duration-150">Logout</button>
                </div>
            </div>
        </div>
    </header>

    <section class="h-full bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl">
                Shopping Cart
            </h2>

            <div class="mt-8 grid gap-8 lg:grid-cols-3">
                <div class="lg:col-span-2">
                    <div class="space-y-8">
                        @forelse ($cartItems as $item)
                            <div class="relative border rounded-lg shadow-sm p-4 dark:border-gray-700 dark:bg-gray-800">
                                <!-- Remove button positioned at the top-right corner -->
                                <button type="button" wire:click="removeItem({{ $item['id'] }})"
                                    class="absolute top-2 right-2 inline-flex items-center text-xl font-medium text-red-600 hover:underline dark:text-red-500">
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                    </svg>
                                </button>

                                <div class="flex items-center gap-4">
                                    <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                        class="h-20 w-20 object-cover rounded-md">

                                    <div>
                                        <p class="text-lg font-semibold text-gray-900 hover:underline dark:text-white">
                                            {{ $item['name'] }}
                                        </p>
                                        <p class="text-sm font-light text-gray-500">
                                            Price: ${{ number_format($item['price'], 2) }}
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-4 flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <button type="button" wire:click="decrementQuantity({{ $item['id'] }})"
                                            class="px-3 py-1 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-200">
                                            -
                                        </button>
                                        <span class="font-medium text-gray-50">{{ $item['quantity'] }}</span>
                                        <button type="button" wire:click="incrementQuantity({{ $item['id'] }})"
                                            class="px-3 py-1 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-200">
                                            +
                                        </button>
                                    </div>
                                    <div class="text-right">

                                        <p class="text-sm font-medium text-gray-50 dark:text-white">
                                            Total: ${{ number_format($item['total_price'], 2) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-500 dark:text-gray-400">Your cart is empty.</p>
                        @endforelse
                    </div>
                </div>


                <div class="p-6 rounded-lg border shadow-sm bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Order Summary
                    </h3>
                    <div class="mt-4 space-y-2">
                        <p class="flex justify-between text-sm text-gray-700 dark:text-gray-300">
                            <span>Total Items:</span>
                            <span>{{ $cartCount }}</span>
                        </p>
                        <p class="flex justify-between text-sm text-gray-700 dark:text-gray-300">
                            <span>Total Price:</span>
                            <span>${{ number_format($this->getCartTotal(), 2) }}</span>
                        </p>
                    </div>
                    <form wire:submit.prevent="redirectToCheckout">
                        @csrf
                        <button type="submit" class="mt-6 w-full px-4 py-2 text-white bg-indigo-600 hover:bg-indigo-700 rounded-md text-center">
                            Checkout
                        </button>
                    </form>                                 
                </div>
            </div>
        </div>
    </section>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');
        const userMenuButton = document.getElementById('user-menu-button');
        const dropdown = document.getElementById('dropdown');

        menuToggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        userMenuButton.addEventListener('click', () => {
            dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!userMenuButton.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</div>
