<div>
    {{-- Do your work, then step back. --}}

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
                                    <a href="{{ route('bookingList') }}" class="block py-2 px-4 hover:bg-slate-500">Book</a>
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

                <!-- Booking List -->
                <div>
                    <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-gray-900 mb-6">Booking List</h1>
                    <div class="overflow-x-auto rounded-lg shadow-lg">
                        <table
                            class="table-auto w-full border-collapse bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Order ID
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        User
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Product
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Price
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Date Delivery
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Time Delivery
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Message
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Design
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    <tr
                                        class="hover:bg-gray-500 dark:hover:bg-gray-700 transition duration-200 ease-in-out">
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ $booking->id }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ $booking->name }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ $booking->product_name }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ number_format($booking->price, 2) }} {{-- Format price --}}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ $booking->date }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ $booking->time }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            {{ $booking->message }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                            @if ($booking->design)
                                                <img src="{{ asset('storage/' . $booking->design) }}"
                                                    alt="Design Image" class="w-16 h-16 object-cover">
                                            @else
                                                No design
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
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
