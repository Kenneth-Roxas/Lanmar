<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @section('title', 'Users')
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
                            <p class="font-semibold">Kenneth T. Roxas</p>
                            <p class="text-gray-600 dark:text-gray-400">Administrator</p>
                        </div>
                    </div>
                </div>
                <!-- User Profile Section -->
                <div class="text-lg">
                    <div class="mx-auto sm:px-6 lg:px-8">
                        <div class="dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg px-3">
                            <div class="containter mx-auto">
                                <h1 class="text-xl font-bold mb-6 px-1">List of User</h1>
                                <table class="w-full table-auto border">
                                    <thead>
                                        <tr class="bg-gray-700 text-gray-50 text-sm leading-normal ">
                                            <th class="py-3 px-6 text-left border border-slate-600">Name</th>
                                            <th class="py-3 px-6 text-left border border-slate-600">Email</th>
                                            <th class="py-3 px-6 text-left border border-slate-600">Contact</th>
                                            <th class="py-3 px-6 text-left border border-slate-600">Last Active</th>
                                            <th class="py-3 px-6 text-left border border-slate-600">Status</th>
                                        </tr>
                                    </thead>

                                    <tbody class="text-gray-50 font-light">

                                        @foreach ($user as $user)
                                            <tr class="border-b border-gray-400 hover:bg-gray-500">
                                                <td class="py-3 px-6 border border-slate-600">{{ $user->name }}</td>
                                                <td class="py-3 px-6 border border-slate-600">{{ $user->email }}</td>
                                                <td class="py-3 px-6 border border-slate-600">{{ $user->contact_number }}</td>
                                                <td class="py-3 px-6 border border-slate-600">
                                                    {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                                </td>
                                                <td class="py-3 px-6 text-center border border-slate-600">
                                                    <span class="bg-{{ $user->last_seen >=now()->subMinutes(2) ? 'green' : 'red'}}-500 text-white py-1 px-3 rounded-full text-lg">
                                                        {{ $user->last_seen >= now()->subMinutes(2) ? 'Online' : 'Offline'}}
                                                    </span>
                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>

        <!-- Scripts -->
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
