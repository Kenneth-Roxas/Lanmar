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

    <body class="bg-gray-400 text-gray-900 font-sans">

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
                        <button wire:click="logout" class="w-full block px-4 py-2 hover:bg-gray-700 duration-150">Logout</button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Profile Container -->
        <div class="container mx-auto p-6 max-w-3xl mt-16">

            <!-- Profile Card -->
            <div
                class="bg-gray-300 rounded-lg shadow-2xl shadow-cyan-400/50 p-8 mb-8 transform transition duration-500 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50">
                <div class="flex items-center justify-center space-x-4">
                    <img class="w-16 h-16 rounded-full" src="{{ url('Picture/default.jpg') }}" alt="Profile Picture">
                    <div class="text-center">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $name }}</h2>
                        <p class="text-gray-500">{{ $email }}</p>
                        <p class="text-gray-500">{{ $contact_number }}</p>
                    </div>
                </div>
            </div>

            <!-- Sections -->
            <div class="grid md:grid-cols-2 gap-8">

                <!-- Personal Information Section -->
                <div
                    class="bg-gray-300 rounded-lg shadow-xl shadow-cyan-400/50 p-8 transform transition duration-500 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50">
                    <h2 class="text-lg font-medium text-gray-800 mb-4">Update Profile</h2>
                    <form wire:submit.prevent="update">
                        @if (session('success'))
                            <div class="alert alert-success text-green-700 text-bold" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="name">Name</label>
                            <input type="text" id="nameInput" wire:model="updateName" placeholder="New Name" class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                            @error('updateName') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="email">Email</label>
                            <input type="email" id="emailInput" wire:model="updateEmail" placeholder="New Email" class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                            @error('updateEmail') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="number">Contact No.</label>
                            <input type="text" id="contactInput" wire:model="updateContact" placeholder="New Contact" class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                            @error('updateContact') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="password">Password</label>
                            <input type="password" id="passwordInput" wire:model="newPassword" placeholder="New Password" class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                            @error('newPassword') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                    
                        <button class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg mt-4 hover:bg-indigo-700 text-sm">Update Information</button>
                    </form>
                    
                </div>

                <!-- Order History Section -->
                {{-- <div
                    class="bg-gray-300 rounded-lg shadow-xl shadow-cyan-400/50 p-8 transform transition duration-500 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50">
                    <h2 class="text-lg font-medium text-gray-800 mb-4">Order History</h2>
                    <ul>
                        <li class="mb-6 border-b pb-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700 font-medium">Order #1813</span>
                                <span class="text-yellow-500 text-sm">Processing</span>
                            </div>
                            <p class="text-gray-800 text-sm">Nov 12, 2024 - ₱150.00</p>
                        </li>
                        <li class="mb-6 border-b pb-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700 font-medium">Order #0654</span>
                                <span class="text-green-600 text-sm">Delivered</span>
                            </div>
                            <p class="text-gray-800 text-sm">Aug 6, 2024 - ₱2,500.00</p>
                        </li>
                        <li class="mb-6 border-b pb-4">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-700 font-medium">Order #1984</span>
                                <span class="text-green-600 text-sm">Delivered</span>
                            </div>
                            <p class="text-gray-800 text-sm">Jan 1, 2024 - ₱3,000.00</p>
                        </li>
                        
                    </ul>
                    <a href="#" class="text-indigo-600 text-sm font-medium hover:underline block mt-12">View All
                        Orders</a>
                </div> --}}
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