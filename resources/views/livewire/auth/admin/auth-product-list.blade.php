<div>
    {{-- The Master doesn't talk, he acts. --}}

    @section('title', 'Admin Panel')
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
                                    <a href="{{ route('bookingList') }}" class="block py-2 px-4 hover:bg-slate-500">Book</a>
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
                            <p class="font-semibold">Kenneth T. Roxas</p>
                            <p class="text-gray-600 dark:text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>

                <!-- Product List -->
                <div class="text-lg">
                    <div class="mx-auto sm:px-6 lg:px-8">
                        <div class="dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg px-3">
                            <div class="containter mx-auto">
                                <table class="w-full table-auto border">
                                    <thead>
                                        <tr class="bg-gray-700 text-gray-50 text-sm leading-normal ">
                                            <th class="py-3 px-3 text-left text-xl border border-slate-600">Products
                                            </th>
                                            <th class="py-3 px-6 text-left border border-slate-600"></th>
                                            <th class="py-3 px-6 text-center border border-slate-600"></th>
                                            <th class="py-3 px-6 text-left border border-slate-600"></th>
                                            <th class="py-3 px-6 text-left border border-slate-600"></th>
                                            <th class="py-3 px-6 text-left border border-slate-600"></th>
                                        </tr>

                                    </thead>

                                    <tbody class="text-gray-50 font-light">
                                        @php
                                            $displayedCategories = [];
                                        @endphp

                                        @foreach ($categories as $category)
                                            @if (!in_array($category->category_name, $displayedCategories))
                                                <tr class="bg-gray-500 hover:bg-gray-500">
                                                    <th class="py-3 px-3 text-center font-bold">
                                                        {{ $category->category_name }}
                                                    </th>
                                                    <th class="py-3 px-6 text-"></th>
                                                    <th class="py-3 px-6 text-left"></th>
                                                    <th class="py-3 px-6 text-left"></th>
                                                    <th class="py-3 px-6 text-left"></th>
                                                    <th class="py-3 px-6 text-left"></th>
                                                </tr>

                                                @php
                                                    $displayedCategories[] = $category->category_name;
                                                @endphp

                                                <tr
                                                    class="bg-gray-400 border-b border-gray-400 text-gray-900 text-base font-semibold">
                                                    <td class="py-3 px-6 text-center border border-slate-600"></td>
                                                    <td class="py-3 px-6 text-center border border-slate-600">Name</td>
                                                    <td class="py-3 px-6 border text-center border-slate-600">Price</td>
                                                    <td class="py-3 px-6 border text-center border-slate-600">Product
                                                        Image</td>
                                                    <td class="py-3 px-6 border border-slate-600"></td>
                                                    <td class="py-3 px-6 border border-slate-600"></td>
                                                </tr>

                                                @foreach ($products as $product)
                                                    @if ($product->category_name == $category->category_name)
                                                        <tr
                                                            class="bg-gray-400 border-b border-gray-400 text-gray-900 text-base font-bold">
                                                            <td class="py-3 px-6 text-center border border-slate-600">
                                                            </td>
                                                            <td class="py-3 px-6 text-center border border-slate-600">
                                                                {{ $product->product_name }}
                                                            </td>
                                                            <td class="py-3 px-6 text-center border border-slate-600">
                                                                {{ $product->price }}
                                                            </td>
                                                            <td
                                                                class="flex justify-center items-center py-3 px-6 border-b border-slate-600">
                                                                <img src="{{ asset('storage/' . $product->image_product) }}"
                                                                    alt="Product Image" class="h-28 w-36 object-cover">
                                                            </td>
                                                            <td class="py-3 px-6 text-center border border-slate-600">
                                                                <button wire:click="update({{ $product->id }})" class="text-green-800">Update</button>
                                                            </td>
                                                            <td class="py-3 px-6 text-center border border-slate-600">
                                                                <button wire:click="delete({{ $product->id }})" class="text-red-500">Delete</button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
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
</div>
