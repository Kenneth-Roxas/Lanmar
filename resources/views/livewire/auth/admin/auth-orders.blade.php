<div>
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
        }

        th {
            background-color: #1e293b;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #1e293b;
        }
    </style>

    <body class="bg-gray-50 font-sans text-gray-900 dark:bg-gray-500 dark:text-white transition-all">
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
            <main class="flex-1 bg-white p-8 overflow-y-auto dark:bg-gray-400 transition-all duration-300 ease-in-out">
                <!-- User Profile Section -->
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center space-x-4">
                        <img src="{{ url('Picture/roxas.jpg') }}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                        <div class="text-sm">
                            <p class="font-bold text-gray-900 dark:text-gray-900">Kenneth T. Roxas</p>
                            <p class="font-semibold text-gray-900 dark:text-gray-900">Administrator</p>
                        </div>
                    </div>
                </div>

                <!-- Orders List -->
                <div>
                    <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-gray-900 mb-6">Orders List</h1>
                    <div class="overflow-x-auto rounded-lg shadow-lg">
                        <table
                            class="table-auto w-full border-collapse bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Order ID
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        User
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Product
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Quantity
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Total Price
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Payment Method
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Street
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Date
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Time
                                    </th>
                                    <th
                                        class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr
                                        class="hover:bg-gray-500 dark:hover:bg-gray-700 transition duration-200 ease-in-out">
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->id }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray-300 dark:border-gray-600">
                                            {{ $order->user->name ?? 'No User' }}
                                        </td>
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->product_name ?? 'No product' }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->quantity ?? 0 }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->total_price ?? '0.00' }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->payment_method }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->street }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray-500 dark:border-gray-600">
                                            {{ $order->created_at->format('M j, Y') }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray500 dark:border-gray-600">
                                            {{ $order->created_at->format('g:i a') }}</td>
                                        <td class="px-1 py-3 border-b text-center border-gray500 dark:border-gray-600">
                                            <div>
                                                <p>Current Status: <strong
                                                        class="text-lg">{{ ucfirst($order->status ?? 'N/A') }}</strong>
                                                </p>
                                                <div class="space-y-2 mt-2">
                                                    <button
                                                        wire:click="updateStatus({{ $order->id }}, 'processing')"
                                                        class="px-2 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">
                                                        Processing
                                                    </button>
                                                    <button wire:click="updateStatus({{ $order->id }}, 'preparing')"
                                                        class="px-2 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 focus:outline-none">
                                                        Preparing
                                                    </button>
                                                    <button wire:click="updateStatus({{ $order->id }}, 'delivery')"
                                                        class="px-2 py-2 bg-green-500 text-white rounded hover:bg-green-600 focus:outline-none">
                                                        Delivery
                                                    </button>
                                                    <button wire:click="markAsDone({{ $order->id }})"
                                                        class="px-2 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 focus:outline-none">
                                                        Done
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @if (session()->has('message'))
                                    <div class="relative mt-3 flex items-center justify-between p-4 rounded-lg bg-green-100 border-l-4 border-green-500 shadow-md"
                                        role="alert">
                                        <!-- Message Content -->
                                        <div class="text-green-800 font-medium">
                                            {{ session('message') }}
                                        </div>

                                        <!-- Close Button -->
                                        <button type="button"
                                            class="text-green-700 hover:text-green-900 focus:outline-none"
                                            onclick="this.parentElement.remove();">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>

        <!-- Sidebar Toggle Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const productButton = document.getElementById('productButton');
                const productMenu = document.getElementById('productMenu');

                productButton.addEventListener('click', function() {
                    productMenu.classList.toggle('hidden');
                });

                const orderButton = document.getElementById('orderButton');
                const orderMenu = document.getElementById('orderMenu');

                orderButton.addEventListener('click', function() {
                    orderMenu.classList.toggle('hidden');
                });
            });
        </script>
    </body>
</div>
