<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @section('title', 'Admin Panel')

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
                        <li class="relative group">
                            <a href="#" class="flex items-center py-2 px-4 rounded-lg hover:bg-slate-600">
                                <i class="fas fa-box mr-3"></i> Products
                                <i class="fas fa-caret-down ml-2"></i>
                            </a>
                            <ul
                                class="absolute left-full top-0 mt-2 w-48 bg-slate-600 rounded-lg shadow-lg group-hover:block hidden">
                                <li><a href="{{ route('list')}}" class="block py-2 px-4 hover:bg-slate-500">Products List</a></li>
                                <li><a href="{{ route('adding')}}" class="block py-2 px-4 hover:bg-slate-500">Add New</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('user')}}"
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
                            <p class="font-semibold">Kenneth T. Roxas</p>
                            <p class="text-gray-600 dark:text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>

                <!-- Adding Product -->


            </main>
        </div>
    </body>
</div>