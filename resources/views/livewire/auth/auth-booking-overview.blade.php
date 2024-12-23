<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <head>

        @section('title', 'Product  Overview Page')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
      <body>
  
        <header class="flex items-center justify-between px-6 py-3 bg-gray-700 shadow-lg fixed top-0 w-full z-50">
            <div class="flex items-center space-x-3">
                <img src="{{ url('Picture/lanmar.png') }}" alt="Lanmar BakeShoppe Logo" class="w-12 h-12 rounded-full">
            </div>
            <button id="menu-toggle" class="block md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <nav id="menu" class="hidden md:flex space-x-5 font-semibold">
                <a href="{{ route('home') }}"
                    class="{{ Request::routeIs('home') ? 'text-yellow-500' : 'text-white' }}">Home</a>
                <a href="{{ route('product') }}"
                    class="{{ Request::routeIs('product') ? 'text-yellow-500' : 'text-white' }}">Product</a>
                <a href="{{ route('about') }}"
                    class="{{ Request::routeIs('about') ? 'text-yellow-500' : 'text-white' }}">About</a>
                <a href="{{ route('contact') }}"
                    class="{{ Request::routeIs('contact') ? 'text-yellow-500' : 'text-white' }}">Contact</a>
            </nav>
            <div class="flex items-center space-x-4">
                <!-- Add to Cart Icon -->
                <a href="{{ route('cart') }}" class="text-white relative">
                    <i class="fas fa-shopping-cart text-lg text-gray-50"></i>
                    <span class="absolute -top-2 -right-3 bg-red-600 text-xs font-bold rounded-full px-1 text-gray-50">
                        {{ $cartCount }}
                    </span>
                </a>
  
                <!-- User Profile Dropdown -->
                <div class="relative">
                    <button id="user-menu-button" class="focus:outline-none">
                        <img src="{{ Auth::check() && Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : url('Picture/default.jpg') }}"
                            alt="User Profile Picture" class="w-10 h-10 rounded-full">
                    </button>
                    <div id="dropdown"
                        class="hidden absolute mt-2 right-0 text-base bg-gray-600 text-gray-50 rounded-md shadow-lg w-28">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-700">Profile</a>
                        <a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-700">Log In</a>
                        <button wire:click="logout"
                            class="block px-4 py-2 hover:bg-gray-700 duration-150">Logout</button>
                    </div>
                </div>
            </div>
        </header>
        <div class="mt-6 bg-gradient-to-br from-teal-200 via-gray-300 to-gray-500 py-16 px-6 sm:px-12 lg:px-20">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    
                <!-- Product Image Section -->
                <div class="relative">
                  <div class="bg-white p-6 rounded-xl shadow-xl">
                      <img src="{{ asset('storage/' . $product->image_product) }}" alt="Delicious Chocolate Cake"
                          class="rounded-xl w-full object-cover" style="height: 450px;">
                  </div>
                  <div
                      class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-pink-400 text-white text-xs font-bold px-4 py-1 rounded-full shadow-lg animate-pulse">
                      {{ $product->category_name}}
                  </div>
              </div>
              
    
                <!-- Product Details Section -->
                <div class="space-y-8">
                    <!-- Title and Description -->
                    <div>
                      <h1 class="text-5xl font-extrabold text-gray-900 leading-snug">
                          {{ $product->product_name }}
                      </h1>
                      <p class="mt-4 text-lg text-gray-700">
                          {{ $product->description }}
                      </p>
    
                    <!-- Pricing -->
                    <div class="text-4xl font-bold text-gray-900">₱{{ $product->price}}</div>
    
                    <!-- Call to Action -->
                    <div class="flex space-x-4 mt-4">
                        <button type="button" wire:click="booking({{ $product->id }})"
                            class="px-8 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-gray-400 focus:ring-offset-2">
                            Book Now
                        </button>
                      </a>
                      <a href="{{ url()->previous() }}">
                          <button type="button"
                              class="px-8 py-3 bg-red-500 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-gray-400 focus:ring-offset-2">
                              Back
                          </button>
                      </a>
                  </div>
                  
                </div>
    
            </div>
        </div>
      </body>
</div>