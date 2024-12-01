<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-700 text-white flex flex-col shadow-lg transition-all duration-300 ease-in-out"
            id="sidebar">
            <!-- Sidebar Logo -->
            <div class="p-6 flex items-center space-x-4">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lan-Mar Logo" class="w-14 h-14 rounded-full">
            </div>

            <nav class="flex-grow">
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center py-2 px-4 rounded-lg hover:bg-slate-600 transition duration-300 ease-in-out">
                            <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
                        </a>
                    </li>
                    <li class="relative group">
                        <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-slate-600">
                            <i class="fas fa-box mr-3"></i> Products
                            <i class="fas fa-caret-down ml-auto"></i>
                        </a>
                        <ul
                            class="absolute left-64 top-0 mt-2 w-48 bg-slate-600 rounded-lg shadow-lg hidden group-hover:block z-20">
                            <li>
                                <a href="{{ route('list') }}"
                                    class="block py-2 px-4 hover:bg-slate-500 transition duration-300">Products List</a>
                            </li>
                            <li>
                                <a href="{{ route('adding') }}"
                                    class="block py-2 px-4 hover:bg-slate-500 transition duration-300">Add New</a>
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
                <div class="z-50 bg-white rounded-lg shadow-lg max-w-lg w-full p-6 dark:bg-gray-700 dark:text-white">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Create New Product</h3>

                    <form wire:submit.prevent="add_category" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-4">
                            <label for="productCategory" class="block text-sm text-gray-600 dark:text-gray-400">
                                Product Category
                            </label>
                            <input type="text" id="productCategory"
                                class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                placeholder="Enter product category" wire:model="category_table">
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
                                placeholder="Enter product Name" wire:model="product_table">
                            @error('product_table')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="productPrice"
                                class="block text-sm text-gray-600 dark:text-gray-400">Price</label>
                            <input type="number" id="productPrice"
                                class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                placeholder="Enter product price" wire:model="pricing">
                            @error('product_table')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="productImage" class="block text-sm text-gray-600 dark:text-gray-400">Product
                                Image</label>
                            <input type="file" id="productImage"
                                class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                accept="image/*">
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


</div>
