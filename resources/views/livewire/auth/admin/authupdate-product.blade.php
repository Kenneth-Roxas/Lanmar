<div>
    {{-- In work, do what you enjoy. --}}

    <body class="bg-gray-50 font-sans text-gray-900 dark:bg-gray-900 dark:text-white transition-all">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-slate-700 text-white flex flex-col shadow-lg transition-all duration-300 ease-in-out"
                id="sidebar">
                <div class="p-6 flex items-center space-x-4">
                    <img src="{{ url('Picture/roxas.jpg') }}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold text-base dark:text-white">Kenneth T. Roxas</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Administrator</p>
                    </div>
                </div>
                <hr class="border-t-1 border-gray-500">
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
                        <li class="relative">
                            <button id="orderButton"
                                class="flex items-center w-full py-2 px-4 rounded-lg hover:bg-slate-600 transition duration-300 ease-in-out">
                                <i class="fas fa-box mr-3"></i> Order
                                <i class="fas fa-caret-down ml-2"></i>
                            </button>
                            <ul id="orderMenu" class="hidden mt-2 w-full bg-slate-600 rounded-lg shadow-lg">
                                <li>
                                    <a href="{{ route('placedOrder') }}"
                                        class="block py-2 px-4 hover:bg-slate-500">Place Order
                                        List</a>
                                </li>
                                <li>
                                    <a href="{{ route('bookingList') }}"
                                        class="block py-2 px-4 hover:bg-slate-500">Book</a>
                                </li>
                            </ul>
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
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-200">Update Product</h3>

                        <form wire:submit.prevent="updateProduct" enctype="multipart/form-data">
                            @csrf
                            @if (session()->has('message'))
                                <div class="text-green-500">{{ session('message') }}</div>
                            @endif
                            @if (session()->has('error'))
                                <div class="text-red-500">{{ session('error') }}</div>
                            @endif
                            <div class="mt-4">
                                <label for="productCategory" class="block text-sm text-gray-600 dark:text-gray-400">
                                    Product Category
                                </label>
                                <input type="text" id="productCategory"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    placeholder="Enter product category" wire:model="productCategory" required>


                            </div>

                            <div class="mt-4">
                                <label for="productName" class="block text-sm text-gray-600 dark:text-gray-400">Product
                                    Name</label>
                                <input type="text" id="productName"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    placeholder="Enter product Name" wire:model="productName" required>
                            </div>

                            <div class="mt-4">
                                <label for="productPrice"
                                    class="block text-sm text-gray-600 dark:text-gray-400">Price</label>
                                <input type="number" id="productPrice"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    placeholder="Enter product price" wire:model="price" required>
                            </div>

                            <div class="mt-4">
                                <label for="productImage" class="block text-sm text-gray-600 dark:text-gray-400">Product
                                    Image</label>
                                <input type="file" id="productImage"
                                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg dark:bg-gray-700 dark:text-white"
                                    accept="image/*" wire:model="imageProduct">
                            </div>

                            <div class="mt-4">
                                <label for="productName" class="block text-sm text-gray-600 dark:text-gray-400">Product
                                    Description</label>
                                    <textarea wire:model="productDescription" id="message" rows="4" placeholder="Your Message Here..." required
                                    class="bg-transparent border-b-2 border-t-2 border-gray-400 text-white w-full placeholder-gray-400 focus:outline-none focus:border-yellow-400 transition-all"></textarea>
                            </div>

                            <div class="flex justify-end mt-6">
                                <button type="button" class="bg-blue-600 text-white py-2 px-4 rounded-lg"
                                    id="closeModal">Close</button>
                                <button type="submit"
                                    class="bg-green-600 text-white py-2 px-4 rounded-lg ml-2">Update</button>
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const productButton = document.getElementById('orderButton');
                const productMenu = document.getElementById('orderMenu');

                productButton.addEventListener('click', function() {
                    productMenu.classList.toggle('hidden');
                });
            });
        </script>
    </body>







    {{-- <div>
        @if (session()->has('message'))
            <div class="text-green-500">{{ session('message') }}</div>
        @endif
        @if (session()->has('error'))
            <div class="text-red-500">{{ session('error') }}</div>
        @endif
    
        <form wire:submit.prevent="updateProduct">
            <div>
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" wire:model="productName" class="border border-gray-400 rounded p-2">
            </div>
            <div>
                <label for="price">Price:</label>
                <input type="number" id="price" wire:model="price" class="border border-gray-400 rounded p-2">
            </div>
            <div>
                <label for="imageProduct">Image:</label>
                <input type="file" id="imageProduct" wire:model="imageProduct" class="border border-gray-400 rounded p-2">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-2 rounded">Update</button>
        </form>
    </div> --}}

</div>
