<div>
    {{-- Success is as dangerous as failure. --}}

    <head>
        @section('title', 'Contact Page')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>

    <body class="bg-gray-800 text-white font-poppins">

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
                        <a href="{{ route('profile') }}" class="w-full block px-4 py-2 hover:bg-gray-700 duration-150">Profile</a>
                        <a href="{{ route('login') }}" class="w-full block px-4 py-2 hover:bg-gray-700 duration-150">Log In</a>
                        <button wire:click="logout" class="w-full block px-4 py-2 hover:bg-gray-700 duration-150">Logout</button>
                    </div>
                </div>
            </div>
        </header>

        <main class="contact flex flex-col items-center justify-center mt-16 min-h-screen px-6">
            <div class="text-center mb-8 -mt-28">
                <h2 class="text-4xl font-bold">Reach Out to Us</h2>
                <p class="text-lg">We'd love to hear from you. Contact us!</p>
            </div>
            <div class="flex flex-col md:flex-row items-center space-y-10 md:space-y-0 md:space-x-10">
                <div class="space-y-6">
                    <div class="flex items-center space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-400 to-gray-800 rounded-full flex justify-center items-center shadow-md">
                            <i class="fa fa-map-marker text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-teal-400 font-semibold">Address</h3>
                            <p>Concepcion, Virac, Catanduanes</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-400 to-gray-800 rounded-full flex justify-center items-center shadow-md">
                            <i class="fa fa-phone text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-teal-400 font-semibold">Phone</h3>
                            <p>+63 93 053 3237</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-400 to-gray-800 rounded-full flex justify-center items-center shadow-md">
                            <i class="fa fa-envelope text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-teal-400 font-semibold">Email</h3>
                            <p>angeloarmendi4@gmail.com</p>
                        </div>
                    </div>
                </div>
                <form
                    class="bg-black bg-opacity-80 p-5 rounded-xl shadow-lg w-full md:w-96 transform transition-transform hover:scale-105">
                    <h2 class="text-2xl font-semibold text-center mb-6 text-white">Message Us</h2>
                    <div class="space-y-6">
                        <!-- Full Name -->
                        <div class="relative">
                            <input type="text" id="full_name" value="{{ $name }}" required
                                class="bg-transparent border-b-2 border-gray-400 text-white w-full placeholder-gray-400 focus:outline-none focus:border-yellow-400 transition-all">
                        </div>

                        <!-- Email -->
                        <div class="relative">
                            <input type="email" id="email" value="{{ $email }}" required
                                class="bg-transparent border-b-2 border-gray-400 text-white w-full placeholder-gray-400 focus:outline-none focus:border-yellow-400 transition-all">
                        </div>

                        <!-- Message -->
                        <div class="relative">
                            <textarea wire:model="message" id="message" rows="4" placeholder="Your Message Here..." required
                                class="bg-transparent border-b-2 border-gray-400 text-white w-full placeholder-gray-400 focus:outline-none focus:border-yellow-400 transition-all"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-gray-700 to-gray-900 text-white font-bold py-2 rounded-lg hover:from-gray-600 hover:to-gray-800 transition">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </body>


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
