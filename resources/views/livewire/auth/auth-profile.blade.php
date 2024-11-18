<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <body class="bg-gray-400 text-gray-900 font-sans">

        <header
            class="fixed top-0 left-0 right-0 bg-transparent shadow-2xl flex items-center justify-between px-2 py-2 z-50 transition-all duration-500"
            id="navbar">
            <img src="{{ url('Picture/lanmar.png') }}" alt="logo"
                class="w-11 h-11 rounded-full border border-gray-300 shadow-md">

            <nav class="flex items-center space-x-5">
                <a href="{{ route('home') }}"
                    class="font-semibold text-base text-white hover:text-gray-900 transition duration-300">Home</a>
                <a href="{{ route('product') }}"
                    class="text-base font-semibold text-white hover:text-gray-900 transition duration-300">Product</a>
                <a href="{{ route('about') }}"
                    class="text-base font-semibold text-white hover:text-gray-900 transition duration-300">About</a>
                <a href="{{ route('contact') }}"
                    class="text-base font-semibold text-white hover:text-gray-900 transition duration-300">Contact</a>
                <div class="relative ml-3">
                    <button type="button"
                        class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-0 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-10 w-10 rounded-full" src="{{ url('Picture/roxas.jpg') }}"
                            alt="User Profile Picture">
                    </button>

                    <!-- Profile dropdown -->
                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-slate-600 py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none transition-all duration-100 ease-out scale-0 group-hover:scale-100"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="{{ route('profile') }}"
                            class="block px-4 py-2 text-lg text-gray-300 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-lg text-gray-300 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                        <a href="{{ route('login') }}"
                            class="block px-4 py-2 text-lg text-gray-300 hover:bg-gray-900 transition-colors duration-150"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Profile Container -->
        <div class="container mx-auto p-6 max-w-3xl mt-12">

            <!-- Profile Card -->
            <div
                class="bg-gray-300 rounded-lg shadow-2xl shadow-cyan-400/50 p-8 mb-8 transform transition duration-500 hover:scale-105 hover:shadow-lg hover:shadow-cyan-500/50">
                <div class="flex items-center justify-center space-x-4">
                    <img class="w-16 h-16 rounded-full" src="{{ url('Picture/roxas.jpg') }}" alt="Profile Picture">
                    <div class="text-center">
                        <h2 class="text-xl font-semibold text-gray-800">Kenneth Roxas</h2>
                        <p class="text-gray-500">roxaskenneth508@gmail.com</p>
                        <p class="text-gray-500">09706265312</p>
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
                            <input type="text" id="nameInput" value="Kenneth Roxas"
                                class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="email">Email</label>
                            <input type="email" id="emailInput" value="roxaskenneth508@gmail.com"
                                class="w-full p-2.5 bg-gray-100 rounded-lg text-gray-700">
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm text-gray-500 mb-1" for="number">Contant No.</label>
                            <input type="email" id="emailInput" value="+63 970 626 5312"
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
        <!-- JavaScript for Dynamic Profile Update -->
        <script>
            function updateProfile() {
                // Get values from the input fields
                const name = document.getElementById('nameInput').value;
                const email = document.getElementById('emailInput').value;

                // Update profile card
                document.getElementById('profileName').textContent = name;
                document.getElementById('profileEmail').textContent = email;
            }
        </script>
    </body>
</div>
