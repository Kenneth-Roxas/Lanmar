<div>
    @section('title', 'Check Out')
    <body class="p-6 bg-gray-900">
        <div>
            <div class="max-w-2xl mx-auto p-6 rounded-lg shadow-lg bg-gray-800">
                <h1 class="text-2xl text-center font-semibold text-gray-100 mb-6">Checkout</h1>

                <!-- Product Details -->
                @if (is_array($product)) <!-- Multiple Products -->
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-200 mb-4">Products in Your Cart</h2>
                        @foreach ($product as $item)
                            <div class="flex items-center space-x-4 mb-4">
                                <!-- Product Image -->
                                <img src="{{ asset('storage/' . ($item['image_product'] ?? 'default-image.jpg')) }}"
                                    alt="{{ $item['name'] ?? 'Product' }}" class="w-14 h-14 rounded-md border border-gray-700">
                                <!-- Product Details -->
                                <div class="flex-1">
                                    <p class="text-gray-100 font-medium text-sm">{{ $item['name'] ?? 'Product Name' }}</p>
                                    <p class="text-xs text-gray-400">₱{{ number_format($item['price'], 2) }} x {{ $item['quantity'] }}</p>
                                </div>
                                <!-- Total Price -->
                                <p class="text-gray-200 font-semibold text-sm">
                                    ₱{{ number_format($item['price'] * $item['quantity'], 2) }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Single Product -->
                    <div class="border border-gray-700 rounded-md p-4 bg-gray-700 mb-6">
                        <h2 class="text-lg font-medium text-gray-200 mb-4">Product</h2>
                        <div class="flex items-center space-x-4">
                            <!-- Product Image -->
                            <img src="{{ asset('storage/' . $product->image_product) }}"
                                alt="{{ $product->product_name }}" class="w-14 h-14 rounded-md">
                            <!-- Product Details -->
                            <div class="flex-1">
                                <p class="text-gray-100 font-medium">{{ $product->product_name }}</p>
                                <p class="text-sm text-gray-400">₱{{ number_format($product->price, 2) }}</p>
                            </div>
                            <!-- Quantity Controls -->
                            <div class="flex items-center space-x-2">
                                <button type="button" wire:loading.attr="disabled"
                                    wire:click="decrement({{ $product->id }})"
                                    class="px-3 py-1 bg-gray-600 text-gray-300 text-xs rounded-md hover:bg-gray-500">-</button>
                                <span class="text-gray-200 text-sm">{{ $quantity }}</span>
                                <button type="button" wire:loading.attr="disabled"
                                    wire:click="increment({{ $product->id }})"
                                    class="px-3 py-1 bg-gray-600 text-gray-300 text-xs rounded-md hover:bg-gray-500">+</button>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Delivery Information -->
                <div class="mb-6">
                    <h2 class="text-lg font-medium text-gray-200 mb-4">Delivery Information</h2>

                    <label class="block text-sm font-medium text-gray-300">Name</label>
                    <input type="text" wire:model="name"
                        class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                        required>
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <label class="block text-sm font-medium text-gray-300 mt-4">Contact Number</label>
                    <input type="text" wire:model="contact_number"
                        class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                        required>
                    @error('contact_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <label class="block text-sm font-medium text-gray-300 mt-4">Street</label>
                    <select wire:model="street"
                        class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                        required>
                        <option value="">Select a street</option>
                        <option>San Vicente</option>
                        <option>Cavinitan</option>
                        <option>Sto. Domingo</option>
                        <option>San Isidro Village</option>
                        <option>Constantino Street</option>
                        <option>Salvacion</option>
                        <option>Sta. Elena</option>
                        <option>Calatagan</option>
                        <option>Calatagan Proper</option>
                        <option>Calatagan Tibang</option>
                        <option>Zamboanga</option>
                        <option>San Pablo</option>
                        <option>San Juan</option>
                    </select>
                    @error('street') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <label class="block text-sm font-medium text-gray-300 mt-4">City</label>
                    <input type="text" wire:model="city" readonly
                        class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-400">
                </div>

                <!-- Payment Method -->
                <div class="mb-6">
                    <h2 class="text-lg font-medium text-gray-200 mb-4">Payment Method</h2>
                    <div>
                        <input type="radio" wire:model="paymentMethod" value="cod" id="cod" class="mr-2">
                        <label for="cod" class="text-gray-300 text-sm">Cash on Delivery (COD)</label>
                    </div>
                    <div>
                        <input type="radio" wire:model="paymentMethod" value="gcash" id="gcash" class="mr-2">
                        <label for="gcash" class="text-gray-300 text-sm">GCash</label>
                    </div>

                    @if ($paymentMethod === 'gcash')
                        <div class="mt-4">
                            <label class="block text-sm font-medium text-gray-300">GCash Mobile Number</label>
                            <input type="text" wire:model="gcashNumber"
                                class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    @endif
                </div>

                <!-- Total Price & Place Order -->
                <div>
                    <p class="text-lg font-semibold text-gray-100 mb-4">Total: ₱{{ number_format($totalPrice, 2) }}</p>
                    <button wire:click="placeOrder"
                        class="w-full py-3 bg-blue-600 text-gray-100 font-semibold rounded-md hover:bg-blue-500 transition">
                        Place Order
                    </button>
                </div>

                <!-- Success Message -->
                @if (session()->has('message'))
                    <div class="mt-4 p-3 bg-green-600 text-gray-100 text-center rounded-md">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </body>
</div>
