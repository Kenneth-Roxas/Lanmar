<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
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
            <main
                class="flex-1 bg-gray-100 p-8 overflow-y-auto dark:bg-gray-800 transition-all duration-300 ease-in-out">
                <!-- User Profile Section -->
                <div class="flex items-center justify-between mb-5 -mt-3">
                    <img src="{{ url('Picture\lanmar.png') }}" alt="Profile Picture" class="w-14 h-14 rounded-full">
                    <div class="text-3xl">
                        <h3 class="font-semibold">Lanmar BakeShoppe Admin Dashboard</h3>
                    </div>
                    <a href="{{ route('login') }}"><button
                            class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                            Log Out</button></a>
                </div>

                <!-- Dashboard Statistics -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Registered Users -->
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex items-center">
                        <div class="text-blue-500 bg-blue-100 dark:bg-blue-500 p-4 rounded-full">
                            <i class="fas fa-users text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-500 dark:text-gray-400">Registered Users</p>
                            <h3 class="text-2xl font-bold dark:text-white">{{ $userCount }}</h3>
                        </div>
                    </div>
                    <!-- Orders -->
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex items-center">
                        <div class="text-green-500 bg-green-100 dark:bg-green-500 p-4 rounded-full">
                            <i class="fas fa-shopping-cart text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-500 dark:text-gray-400">Orders</p>
                            <h3 class="text-2xl font-bold dark:text-white">{{ $orderCount }}</h3>
                        </div>
                    </div>
                    <!-- Bookings -->
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex items-center">
                        <div class="text-yellow-500 bg-yellow-100 dark:bg-yellow-500 p-4 rounded-full">
                            <i class="fas fa-calendar-alt text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-500 dark:text-gray-400">Bookings</p>
                            <h3 class="text-2xl font-bold dark:text-white">{{ $bookingCount }}</h3>
                        </div>
                    </div>
                    <!-- Product Number -->
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex items-center">
                        <div class="text-red-500 bg-red-100 dark:bg-red-500 p-4 rounded-full">
                            <i class="fas fa-dollar-sign text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-500 dark:text-gray-400">Number of Products</p>
                            <h3 class="text-2xl font-bold dark:text-white">{{ $productCount }}</h3>
                        </div>
                    </div>

                    <!-- Shop Rate -->
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md flex items-center">
                        <div class="text-slate-500 bg-red-100 dark:bg-slate-800 p-4 rounded-full">
                            <i class="fas fa-dollar-sign text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-500 dark:text-gray-400">Shop Ratings</p>
                            <h3 class="text-2xl font-bold dark:text-white">{{ $ratings ? number_format($ratings) : 'No ratings yet' }}</h3>
                        </div>
                    </div>
                </div>

                <!-- Orders List -->
                <div>
                    <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-gray-100 mb-6">Orders List</h1>
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
                                        Quantity
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Total Price
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Payment Method
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Date
                                    </th>
                                    <th
                                        class="px-4 py-2 text-left font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                        Time
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr
                                        class="hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200 ease-in-out">
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->id }}</td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->user->name ?? 'No User' }}
                                        </td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->product_name }}</td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->quantity }}</td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->total_price }}</td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->payment_method }}</td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->created_at->format('M j, Y') }}</td>
                                        <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-600">
                                            {{ $order->created_at->format('g:i a') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Booking List --}}
                        <div>
                            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-gray-50 mt-5 mb-6">Booking List</h1>
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


                        {{-- User Feedback --}}
                        <div>
                            <h1 class="text-3xl text-center font-bold text-gray-800 dark:text-gray-50 mt-5 mb-6">Booking List</h1>
                            <div class="overflow-x-auto rounded-lg shadow-lg">
                                <table
                                    class="table-auto w-full border-collapse bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th
                                                class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                                Name
                                            </th>
                                            <th
                                                class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                                Review
                                            </th>
                                            <th
                                                class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                                Rate
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedbacks as $rating)
                                            <tr
                                                class="hover:bg-gray-500 dark:hover:bg-gray-700 transition duration-200 ease-in-out">
                                                <td
                                                class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                                {{ $rating->name }}
                                            </td>
                                            <td
                                                class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                                {{ $rating->feedback }}
                                            </td>
                                            <td
                                                class="px-4 py-2 text-center font-semibold text-sm tracking-wide border-b border-gray-300 dark:border-gray-600">
                                                {{ $rating->rating }}
                                            </td>
                                                {{-- <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                                    {{ $rating->name }}
                                                </td>
                                                <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                                    {{ $rating->feedback }}
                                                </td>
                                                <td class="px-4 py-3 border-b border-gray-500 dark:border-gray-600">
                                                    {{ $rating->rating }}
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Recent Activity Section -->
                        <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md mb-8 mt-10">
                            <h2 class="text-xl font-semibold mb-4 dark:text-white">Recent Activity</h2>
                            <ul class="divide-y divide-gray-200 dark:divide-gray-600">
                                @forelse ($recentActivities as $activity)
                                    <li class="py-3 flex justify-between items-center">
                                        <div class="text-gray-500 dark:text-gray-400">
                                            <p class="font-medium dark:text-white">
                                                {{ $activity->name ?? 'Unknown User' }}</p>
                                            <p>Registered a new account</p>
                                        </div>
                                        <span
                                            class="text-sm text-gray-400">{{ $activity->created_at->diffForHumans() }}</span>
                                    </li>
                                @empty
                                    <li class="py-3 text-gray-500 dark:text-gray-400">
                                        No recent activities.
                                    </li>
                                @endforelse
                            </ul>
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
