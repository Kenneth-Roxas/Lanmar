<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <body class="bg-gray-100">

        <!-- Header -->
        <header class="bg-gray-800 text-white py-4">
          <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold">AquaFlask</h1>
            <nav>
              <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-400">Home</a></li>
                <li><a href="{{route('product')}}" class="hover:text-gray-400">Product</a></li>
                <li><a href="#" class="hover:text-gray-400">About</a></li>
                <li><a href="#" class="hover:text-gray-400">Contact</a></li>
              </ul>
            </nav>
          </div>
        </header>
      
        <!-- Product Overview Section -->
        <main class="container mx-auto py-12 px-4 max-w-5xl">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Left Column: Product Image and Gallery -->
            <div>
              <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-4">
                <img src="{{ url('Picture/bongga.jpg') }}" alt="Aqua Flask" class="w-full h-80 object-fit-lg-fill">
              </div>
              <div class="flex space-x-2">
                <!-- Thumbnail Images -->
                <img src="{{ url('Picture/bongga.jpg') }}" alt="Thumbnail" class="w-16 h-16 border rounded-lg cursor-pointer">
                <img src="{{ url('Picture/bongga.jpg') }}" alt="Thumbnail" class="w-16 h-16 border rounded-lg cursor-pointer">
                <img src="{{ url('Picture/bongga.jpg') }}" alt="Thumbnail" class="w-16 h-16 border rounded-lg cursor-pointer">
              </div>
            </div>
      
            <!-- Right Column: Product Details -->
            <div>
              <h2 class="text-2xl font-semibold text-gray-800">AquaFlask (40oz) Wide Mouth with Spout Lid</h2>
              <p class="text-gray-500 mt-2">Stainless Steel Drinking Water Aqua Flask</p>
      
              <!-- Ratings and Reviews -->
              <div class="flex items-center mt-2">
                <span class="text-yellow-400">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                <span class="text-gray-600 ml-2">(10K+ Ratings)</span>
              </div>
      
              <!-- Price -->
              <div class="flex items-baseline mt-4">
                <span class="text-3xl font-bold text-red-600">₱850</span>
                <span class="text-gray-400 line-through ml-3">₱2,999</span>
                <span class="bg-red-100 text-red-600 text-sm font-semibold ml-3 px-2 py-1 rounded">-72%</span>
              </div>
      
              <!-- Return, Add-On, and Protection -->
              <div class="mt-6">
                <p class="flex items-center"><span class="material-icons text-green-500 mr-2">autorenew</span> Free & Easy Returns</p>
                <p class="mt-2 text-red-600">Add-On: <span class="font-semibold">Free Gift</span></p>
                <p class="mt-2 text-blue-600">Protection: Merchandise Protection</p>
              </div>
      
              <!-- Shipping Section -->
              <div class="mt-6">
                <h3 class="text-lg font-semibold">Shipping</h3>
                <p class="text-gray-600 mt-1">Shipping to Metro Manila</p>
              </div>
      
              <!-- Color Options -->
              <div class="mt-6">
                <h3 class="text-lg font-semibold">Colors</h3>
                <div class="flex flex-wrap gap-2 mt-2">
                  <button class="border rounded-lg px-3 py-1 text-sm bg-gray-200 hover:bg-gray-300">40oz - Space Black</button>
                  <button class="border rounded-lg px-3 py-1 text-sm bg-gray-200 hover:bg-gray-300">40oz - Cherry Red</button>
                  <button class="border rounded-lg px-3 py-1 text-sm bg-gray-200 hover:bg-gray-300">40oz - Hunter Green</button>
                  <button class="border rounded-lg px-3 py-1 text-sm bg-gray-200 hover:bg-gray-300">40oz - Aquamarine</button>
                  <!-- More color options as needed -->
                </div>
              </div>
      
              <!-- Quantity Selector -->
              <div class="mt-6">
                <h3 class="text-lg font-semibold">Quantity</h3>
                <div class="flex items-center mt-2">
                  <input type="number" value="1" min="1" class="w-16 text-center border border-gray-400">
                </div>
              </div>
      
              <!-- Action Buttons -->
              <div class="flex space-x-4 mt-6">
                <button class="bg-red-600 text-white font-semibold px-6 py-3 rounded hover:bg-red-500 w-full">Add to Cart</button>
                <button class="border border-red-600 text-red-600 font-semibold px-6 py-3 rounded hover:bg-red-50 w-full">Buy Now</button>
              </div>
            </div>
          </div>
        </main>
      
        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-4 mt-12">
          <div class="container mx-auto text-center">
            <p>&copy; 2024 AquaFlask. All rights reserved.</p>
          </div>
        </footer>
      
      </body>
</div>
