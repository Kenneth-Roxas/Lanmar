<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <body class="p-6 bg-gray-900">
        <div class="max-w-2xl mx-auto p-6 rounded-lg shadow-lg bg-gray-800">
            <h1 class="text-2xl text-center font-semibold text-gray-100 mb-6">Checkout</h1>

            <!-- Cart Items with Border -->
            <div>
                <h2 class="text-lg font-medium text-gray-200 mb-4">Products in Your Cart</h2>
                @foreach ($cartItems as $item)
                    <div class="flex items-center space-x-4 mb-4 border-b border-gray-600 pb-4">
                        <!-- Product Image -->
                        <img src="{{ asset('storage/' . ($item['image'] ?? 'default-image.jpg')) }}"
                            alt="{{ $item['name'] }}" class="w-16 h-16 rounded-md border border-gray-700">
                        <!-- Product Details -->
                        <div class="flex-1">
                            <p class="text-gray-100 font-medium text-sm">{{ $item['name'] }}</p>
                            <p class="text-xs text-gray-400">₱{{ number_format($item['price'], 2) }} x
                                {{ $item['quantity'] }}</p>
                        </div>
                        <!-- Total Price for Each Product -->
                        <p class="text-gray-200 font-semibold text-sm">
                            ₱{{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                    </div>
                @endforeach
            </div>



            <!-- Delivery Information -->
            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-200 mb-4">Delivery Information</h2>

                <label class="block text-sm font-medium text-gray-300">Name</label>
                <input type="text" wire:model="name"
                    class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                    required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <label class="block text-sm font-medium text-gray-300 mt-4">Contact Number</label>
                <input type="text" wire:model="contact_number"
                    class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500"
                    required>
                @error('contact_number')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

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
                @error('street')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                <label class="block text-sm font-medium text-gray-300 mt-4">City</label>
                <input type="text" wire:model="city" readonly
                    class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-400">
            </div>

            <!-- Payment Method -->
            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-200 mb-4">Payment Method</h2>
                <div>
                    <input type="radio" wire:model="payment_method" value="cash" id="cash" class="mr-2">
                    <label for="cash" class="text-gray-300 text-sm">Cash on Delivery (COD)</label>
                </div>
                <div>
                    <input type="radio" wire:model="payment_method" value="gcash" id="gcash" class="mr-2">
                    <label for="gcash" class="text-gray-300 text-sm">GCash</label>
                </div>

                @error('payment_method')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror

                @if ($payment_method === 'gcash')
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-300">GCash Mobile Number</label>
                        <input type="text" wire:model="gcash_number"
                            class="w-full mt-1 p-2 border border-gray-700 rounded-md bg-gray-700 text-gray-200 focus:ring-blue-500 focus:border-blue-500">
                        @error('gcash_number')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
            </div>

            <!-- Total Price & Place Order -->
            <div>
                <p class="text-lg font-semibold text-gray-100 mb-4">Total: ₱{{ number_format($totalAmount, 2) }}</p>
                <button wire:click="completeCheckout"
                    class="w-full py-3 bg-blue-600 text-gray-100 font-semibold rounded-md hover:bg-blue-500 transition">
                    Place Order
                </button>
            </div>

            <!-- Success Message Box -->
            @if (session()->has('message'))
                <div class="mt-4 p-4 bg-green-100 text-green-800 rounded-md">
                    {{ session('message') }}
                </div>
            @endif
        </div>
</div>
