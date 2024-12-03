<div>
    {{-- The Master doesn't talk, he acts. --}}
    <style>
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1000;
            overflow-y: auto;
            width: 16rem;
        }

        main {
            margin-left: 16rem;
            width: calc(100% - 16rem);
        }
    </style>


    <body class="bg-gray-50 font-sans text-gray-900 dark:bg-gray-900 dark:text-white transition-all">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-slate-700 text-white flex flex-col shadow-lg transition-all duration-300 ease-in-out"
                id="sidebar">
                <div class="p-6 flex items-center space-x-4">
                    <img src="{{ url('Picture/lanmar.png') }}" alt="Lan-Mar Logo" class="w-14 h-14 rounded-full">
                </div>

                <!-- Sidebar Navigation -->
                <nav class=" flex-grow">
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center py-2 px-4 rounded-lg hover:bg-slate-600 transition duration-300 ease-in-out">
                                <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                            </a>
                        </li>
                        <li class="relative">
                            <button id="productButton"
                                class="flex items-center w-full py-2 px-4 rounded-lg hover:bg-slate-600 transition duration-300 ease-in-out">
                                <i class="fas fa-box mr-3"></i> Products
                                <i class="fas fa-caret-down ml-2"></i>
                            </button>
                            <ul id="productMenu" class="hidden mt-2 w-full bg-slate-600 rounded-lg shadow-lg">
                                <li>
                                    <a href="{{ route('list') }}" class="block py-2 px-4 hover:bg-slate-500">Products
                                        List</a>
                                </li>
                                <li>
                                    <a href="{{ route('adding') }}" class="block py-2 px-4 hover:bg-slate-500">Add
                                        New</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('user') }}"
                                class="flex items-center py-2 px-4 rounded-lg hover:bg-slate-600 transition duration-300 ease-in-out">
                                <i class="fas fa-users mr-3"></i> Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}"
                                class="flex items-center py-2 px-4 rounded-lg hover:bg-slate-600 transition duration-300 ease-in-out">
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
                        <img src="{{ url('Picture\roxas.jpg') }}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                        <div class="text-sm">
                            <p class="font-semibold text-gray-50">Kenneth T. Roxas</p>
                            <p class="text-gray-600 dark:text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>
                <div class="flex-grow flex items-center justify-center dark:bg-gray-800">
                    <div
                        class="z-50 bg-white rounded-lg shadow-lg max-w-lg w-full p-6 dark:bg-gray-700 dark:text-white">
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Create New Product</h3>

                        <form wire:submit.prevent="add_category" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-4">
                                <label for="productCategory" class="block text-sm text-gray-600 dark:text-gray-400">
                                    Product Category
                                </label>
                                <input type="text" id="productCategory"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    placeholder="Enter product category" wire:model="category_table" required>
                                @error('category_table')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                                @if (session()->has('success'))
                                    <div class="mt-4 text-green-500">
                                        {{ session('success') }}
                                    </div>
                                @endif

                            </div>

                            <div class="mt-4">
                                <label for="productName" class="block text-sm text-gray-600 dark:text-gray-400">Product
                                    Name</label>
                                <input type="text" id="productName"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    placeholder="Enter product Name" wire:model="product_table" required>
                                @error('product_table')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <label for="productPrice"
                                    class="block text-sm text-gray-600 dark:text-gray-400">Price</label>
                                <input type="number" id="productPrice"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    placeholder="Enter product price" wire:model="pricing" required>
                                @error('product_table')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <label for="productImage" class="block text-sm text-gray-600 dark:text-gray-400">Product
                                    Image</label>
                                <input type="file" id="productImage"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    accept="image/*" wire:model="image_product">
                            </div>

                            <div class="flex justify-end mt-6">
                                <button type="button" class="bg-blue-600 text-white py-2 px-4 rounded-lg"
                                    id="closeModal">Close</button>
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-4 rounded-lg ml-2">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const productButton = document.getElementById('productButton');
                const productMenu = document.getElementById('productMenu');

                productButton.addEventListener('click', function() {
                    productMenu.classList.toggle('hidden'); 
                });
            });
        </script>
    </body>

</div>
