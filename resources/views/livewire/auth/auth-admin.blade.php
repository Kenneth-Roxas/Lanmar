<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @section('title', 'Admin Panel')
    <body class="bg-gray-50 font-sans text-gray-900 dark:bg-gray-900 dark:text-white transition-all">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-blue-700 text-white flex flex-col shadow-lg transition-all duration-300 ease-in-out" id="sidebar">
                <div class="p-6 flex items-center space-x-4">
                    <img src="{{ url('Picture/lanmar.png') }}" alt="Lan-Mar Logo" class="w-14 h-14 rounded-full">
                    <h1 class="text-2xl font-semibold tracking-wide">Admin Panel</h1>
                </div>

                <!-- Sidebar Navigation -->
                <nav class="mt-8 flex-grow">
                    <ul class="space-y-4">
                        <li>
                            <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">
                                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">
                                <i class="fas fa-cogs mr-3"></i> Settings
                            </a>
                        </li>
                        <li class="relative group">
                            <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-blue-600">
                                <i class="fas fa-box mr-3"></i> Products
                                <i class="fas fa-caret-down ml-2"></i>
                            </a>
                            <ul class="absolute left-full top-0 mt-2 w-48 bg-blue-600 rounded-lg shadow-lg group-hover:block hidden">
                                <li><a href="#" class="block py-2 px-4 hover:bg-blue-500">All Products</a></li>
                                <li><a href="#" class="block py-2 px-4 hover:bg-blue-500">Add New</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">
                                <i class="fas fa-users mr-3"></i> Users
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-300 ease-in-out">
                                <i class="fas fa-sign-out-alt mr-3"></i> Logout
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 bg-white p-8 overflow-y-auto dark:bg-gray-800 transition-all duration-300 ease-in-out">
                <!-- User Profile Section -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-4">
                        <img src="profile-pic.jpg" alt="Profile Picture" class="w-10 h-10 rounded-full">
                        <div class="text-sm">
                            <p class="font-semibold">Admin</p>
                            <p class="text-gray-600 dark:text-gray-400">Administrator</p>
                        </div>
                    </div>

                    <!-- Dark/Light Mode Toggle -->
                    <button id="theme-toggle" class="bg-blue-600 text-white py-2 px-4 rounded-full shadow-lg hover:bg-blue-500">
                        <i class="fas fa-moon"></i> Toggle Dark Mode
                    </button>
                </div>

                <!-- Dashboard Header -->
                <header class="mb-6">
                    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Welcome to Admin Panel</h1>
                    <p class="text-gray-600 dark:text-gray-400">Here you can manage all your products, orders, and more.</p>
                </header>

                <!-- Dashboard Cards (Analytics) -->
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 dark:bg-gray-700 dark:text-white">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Sales</h3>
                        <p class="text-2xl text-blue-600">₹45,000</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 dark:bg-gray-700 dark:text-white">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Total Products</h3>
                        <p class="text-2xl text-blue-600">120</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition duration-300 dark:bg-gray-700 dark:text-white">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Pending Orders</h3>
                        <p class="text-2xl text-blue-600">15</p>
                    </div>
                </section>

                <!-- Notifications Section -->
                <section class="mt-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg dark:bg-gray-700 dark:text-white">
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200">Recent Notifications</h3>
                        <ul class="space-y-3 mt-4">
                            <li class="p-3 bg-blue-100 rounded-lg shadow-sm hover:bg-blue-200 dark:bg-blue-800 dark:hover:bg-blue-700">
                                <p class="text-gray-700 dark:text-gray-100">New order received #1500</p>
                                <span class="text-sm text-blue-500">2 hours ago</span>
                            </li>
                            <li class="p-3 bg-blue-100 rounded-lg shadow-sm hover:bg-blue-200 dark:bg-blue-800 dark:hover:bg-blue-700">
                                <p class="text-gray-700 dark:text-gray-100">Product stock is low for 'Product X'</p>
                                <span class="text-sm text-blue-500">1 day ago</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Content Area -->
                <section class="mt-8">
                    @yield('content')
                </section>
            </main>
        </div>

        <!-- Modal for Adding Product -->
        <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="productModal">
            <div class="bg-gray-800 bg-opacity-50 absolute inset-0"></div>
            <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 dark:bg-gray-800 dark:text-white">
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Create New Product</h3>
                <form>
                    <div class="mt-4">
                        <label for="productName" class="block text-sm text-gray-600 dark:text-gray-400">Product Name</label>
                        <input type="text" id="productName" class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white" placeholder="Enter product name">
                    </div>
                    <div class="mt-4">
                        <label for="productPrice" class="block text-sm text-gray-600 dark:text-gray-400">Price</label>
                        <input type="number" id="productPrice" class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white" placeholder="Enter product price">
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="button" class="bg-blue-600 text-white py-2 px-4 rounded-lg" id="closeModal">Close</button>
                        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg ml-2">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Scripts -->
        <script>
            // Toggle Dark Mode
            const themeToggleButton = document.getElementById('theme-toggle');
            themeToggleButton.addEventListener('click', () => {
                document.body.classList.toggle('dark');
            });

            // Sidebar Toggle
            const sidebar = document.getElementById('sidebar');
            const toggleSidebarButton = document.getElementById('toggleSidebar');
            toggleSidebarButton.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
            });

            // Modal
            const modal = document.getElementById('productModal');
            const closeModalButton = document.getElementById('closeModal');
            function openModal() {
                modal.classList.remove('hidden');
            }
            closeModalButton.addEventListener('click', () => {
                modal.classList.add('hidden');
            });
        </script>
    </body>
</div>
