<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
@section('title', 'Profile')

    <body class="bg-gray-400 text-gray-900 font-sans">

        <header class="flex items-center justify-between px-6 py-2 bg-slate-700 shadow-lg text-white fixed top-0 w-full z-50 ">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lanmar BakeShoppe Logo" class="w-12 h-12 rounded-full">
            </div>
            
            <button id="menu-toggle" class="block md:hidden">
                <i class="fas fa-bars text-white"></i>
            </button>
            <nav id="menu" class="hidden md:flex space-x-5 flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-5 font-semibold">
                <a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'text-yellow-500' : 'text-white' }} nav-item">Home</a>
                <a href="{{ route('product') }}" class="{{ Request::routeIs('product') ? 'text-yellow-500' : 'text-white' }} nav-item">Product</a>
                <a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'text-yellow-500' : 'text-white' }} nav-item">About</a>
                <a href="{{ route('contact') }}" class="{{ Request::routeIs('contact') ? 'text-yellow-500' : 'text-white' }} nav-item">Contact</a>
            </nav>
            <div class="relative">
                <button id="user-menu-button" aria-expanded="true" class="focus:outline-none">
                    <img src="{{ url('Picture/default.jpg') }}" class="w-10 h-10 rounded-full" alt="User Profile Picture">
                </button>
                <div id="dropdown" class="absolute hidden mt-2 right-0 bg-slate-600 text-gray-50 rounded-md shadow-lg w-28">
                    <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700 duration-150">Sign In</a>
                    <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700 duration-150">Sign Out</a>
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
                    <h2 class="text-lg font-medium text-gray-800 mb-4">Personal Information</h2>
                    <form action="#">
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="name">Name</label>
                            <input type="text" id="nameInput" value="{{ $name }}"
                                class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="email">Email</label>
                            <input type="email" id="emailInput" value="{{ $email }}"
                                class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="number">Contant No.</label>
                            <input type="email" id="emailInput" value="{{ $contact_number }}"
                                class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                        </div>
                        <button type="button" onclick="updateProfile()"
                            class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg mt-4 hover:bg-indigo-700 text-sm">Update
                            Information</button>
                    </form>
                </div>

                <!-- Order History Section -->
                <div
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
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('click', (event) => {
                const button = document.getElementById('user-menu-button');
                const dropdown = button.nextElementSibling;
                
                button.addEventListener('click', () => {
                    dropdown.classList.toggle('scale-100');
                    dropdown.classList.toggle('hidden');
                });

                if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                    dropdown.classList.add('hidden');
                    dropdown.classList.remove('scale-100');
                }
            });
        </script>
    </body>
</div>
