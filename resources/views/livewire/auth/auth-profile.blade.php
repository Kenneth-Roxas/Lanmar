<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        @section('title', 'User Profile')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha384-RFYK5sE5J9ddxzS3LknDyT00H5y/cx6IIcOBM/tlT7p9IFi59VL52Lvnb7/57vEy" crossorigin="anonymous">

    </head>

    <body class="bg-gray-600 text-gray-900 font-sans">

        <header class="flex items-center justify-between px-6 py-3 bg-gray-800 shadow-md fixed top-0 w-full z-50">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lanmar BakeShoppe Logo" class="w-10 h-10 rounded-full">
            </div>
            <button id="menu-toggle" class="block md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <nav id="menu" class="hidden md:flex space-x-5 text-sm font-medium">
                <a href="{{ route('home') }}"
                    class="{{ Request::routeIs('home') ? 'text-yellow-400' : 'text-white' }}">Home</a>
                <a href="{{ route('product') }}"
                    class="{{ Request::routeIs('product') ? 'text-yellow-400' : 'text-white' }}">Product</a>
                <a href="{{ route('about') }}"
                    class="{{ Request::routeIs('about') ? 'text-yellow-400' : 'text-white' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="{{ Request::routeIs('contact') ? 'text-yellow-400' : 'text-white' }}">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <!-- Add to Cart Icon -->
                <a href="{{ route('cart') }}" class="text-white relative">
                    <i class="fas fa-shopping-cart text-lg"></i>
                    <span class="absolute -top-2 -right-3 bg-red-600 text-xs font-bold rounded-full px-1 text-gray-50">
                        {{ $cartCount }}
                    </span>
                </a>
                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button id="user-menu-button" class="focus:outline-none">
                        <img src="{{ url('Picture/default.jpg') }}" alt="User Profile Picture"
                            class="w-8 h-8 rounded-full">
                    </button>
                    <div id="dropdown"
                        class="hidden absolute mt-2 right-0 text-base bg-gray-700 text-gray-50 rounded-md shadow-lg w-32">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-600">Profile</a>
                        <button wire:click="logout"
                            class="w-full block px-4 py-2 hover:bg-gray-600 duration-150">Logout</button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Profile Container -->
        <div class="container mx-auto p-6 max-w-3xl mt-20">

            <!-- Profile Card -->
            <div class="bg-gradient-to-r from-gray-800 to-teal-100 rounded-lg shadow-lg p-6 mb-6">
                <div class="flex items-center justify-center space-x-4">
                    <img class="w-16 h-16 rounded-full border-4 border-teal-400" src="{{ url('Picture/default.jpg') }}"
                        alt="Profile Picture">
                    <div class="text-center">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $name }}</h2>
                        <p class="text-sm text-gray-600">{{ $email }}</p>
                        <p class="text-sm text-gray-600">{{ $contact_number }}</p>
                    </div>
                </div>
            </div>

            <!-- Sections -->
            <div class="grid gap-6">

                <!-- Order History Section -->
                <div class="bg-gradient-to-r from-teal-100 to-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Order History</h2>
                    <ul class="space-y-4">
                        @foreach ($orders as $order)
                            <li class="p-4 bg-white rounded-lg shadow-md border-l-4 border-teal-400">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-800 font-semibold">Order #{{ $order->id }}</span>
                                    <span class="text-sm text-gray-500">{{ $order->created_at->format('M j, Y') }} at
                                        {{ $order->created_at->format('g:i a') }}</span>
                                    <span
                                        class="text-teal-600 bg-teal-100 text-xs font-medium px-2 py-1 rounded-full">Processing</span>
                                </div>
                                <div class="mt-3 text-sm text-gray-700">
                                    <span class="block">{{ $order->product_name }} <span
                                            class="text-gray-500">x{{ $order->quantity }}</span></span>
                                    <span
                                        class="block mt-2 text-lg font-semibold text-teal-600">₱{{ number_format($order->total_price, 2) }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Back Button: Pagination Back -->
                    <div class="text-center mt-4">
                        <!-- Back to previous page using pagination -->
                        <a href="{{ $orders->previousPageUrl() }}"
                            class="inline-block bg-slate-800 text-white py-2 px-4 rounded-lg shadow-md hover:bg-gray-300 transition duration-300 {{ !$orders->onFirstPage() ? '' : 'hidden' }}">
                            Back to Previous Orders
                        </a>

                        <!-- Check if there are more pages -->
                        @if ($orders->hasMorePages())
                            <a href="{{ $orders->nextPageUrl() }}"
                                class="inline-block bg-slate-800 text-white py-2 px-4 rounded-lg shadow-md hover:bg-teal-500 transition duration-300">
                                Load More
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Book History Section -->
                <div class="bg-gradient-to-r from-teal-100 to-gray-800 p-6 rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Book History</h2>
                    <ul class="space-y-4">
                        @foreach ($bookings as $booking)
                            <li class="p-4 bg-white rounded-lg shadow-md border-l-4 border-teal-400">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-800 font-semibold">Booking No#{{ $booking->id }}</span>
                                    <span class="text-sm text-gray-500">{{ $booking->created_at->format('M j, Y') }} at
                                        {{ $booking->created_at->format('g:i a') }}</span>
                                    <span
                                        class="text-teal-600 bg-teal-100 text-xs font-medium px-2 py-1 rounded-full">Processing</span>
                                </div>
                                <div class="mt-3 text-sm text-gray-700">
                                    <span class="text-gray-500">x{{ $booking->date ?? 'No Date' }}</span>
                                    <span class="text-gray-500">x{{ $booking->time ?? 'No Time' }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <!-- Back Button: Pagination Back -->
                    <div class="text-center mt-4">
                        <!-- Back to previous page using pagination -->
                        <a href="{{ $bookings->previousPageUrl() }}"
                            class="inline-block bg-slate-800 text-white py-2 px-4 rounded-lg shadow-md hover:bg-gray-300 transition duration-300 {{ !$orders->onFirstPage() ? '' : 'hidden' }}">
                            Back to Previous Orders
                        </a>

                        <!-- Check if there are more pages -->
                        @if ($bookings->hasMorePages())
                            <a href="{{ $orders->nextPageUrl() }}"
                                class="inline-block bg-slate-800 text-white py-2 px-4 rounded-lg shadow-md hover:bg-teal-500 transition duration-300">
                                Load More
                            </a>
                        @endif
                    </div>
                </div>


                <!-- Personal Information Section -->
                <div class="bg-gradient-to-r from-teal-200 to-gray-800 rounded-lg shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Update Profile</h2>
                    <form wire:submit.prevent="update">
                        @if (session('success'))
                            <div class="alert alert-success text-green-700 font-bold mb-4" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Name Input -->
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-2" for="name">Name</label>
                            <input type="text" id="nameInput" wire:model="updateName" placeholder="New Name"
                                class="w-full p-3 font-semibold bg-gray-300 rounded-lg text-gray-700">
                            @error('updateName')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Input -->
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-2" for="email">Email</label>
                            <input type="email" id="emailInput" wire:model="updateEmail" placeholder="New Email"
                                class="w-full p-3 font-semibold bg-gray-300 rounded-lg text-gray-700">
                            @error('updateEmail')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Contact No. Input -->
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-2" for="number">Contact No.</label>
                            <input type="text" id="contactInput" wire:model="updateContact"
                                placeholder="New Contact" class="w-full p-3 bg-gray-300 rounded-lg text-gray-700">
                            @error('updateContact')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-2" for="password">Password</label>
                            <input type="password" id="passwordInput" wire:model="newPassword"
                                placeholder="New Password" class="w-full p-3 bg-gray-300 rounded-lg text-gray-700">
                            @error('newPassword')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button
                            class="w-full bg-indigo-600 text-white px-4 py-3 rounded-lg mt-6 hover:bg-indigo-700 text-sm">
                            Update Information
                        </button>
                    </form>
                </div>
            </div>
        </div>
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
    </body>
</div>
