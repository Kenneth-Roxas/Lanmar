<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @section('title', 'Check Out')
    <style>
        select.scrollable {
            max-height: 150px;
            overflow-y: auto;
        }
    </style>

<body class="p-4 bg-gray-300">

    <div>
        <div class="max-w-lg mx-auto p-6 rounded-lg shadow-md bg-slate-200">
            <h1 class="text-xl text-center font-extrabold text-gray-800 mb-6">Checkout</h1>

            <!-- Product List -->
            <div class="border border-gray-200 rounded-lg p-4 bg-gray-50 mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Products</h2>

                @if ($products->isEmpty())
                    <p class="text-red-500">No products available. Please check the product IDs.</p>
                @else
                    <div class="space-y-4">
                        @foreach ($products as $index => $product)
                            <div class="flex items-center space-x-4">
                                <!-- Product Image -->
                                <img src="{{ $product->image_product ? url('storage/' . $product->image_product) : url('Picture/placeholder.jpg') }}"
                                    alt="{{ $product->product_name }}" class="w-16 h-16 rounded-md">

                                <!-- Product Details -->
                                <div class="flex-1">
                                    <p class="text-gray-800 font-medium">{{ $product->product_name }}</p>
                                    <p class="text-sm text-gray-500">₱{{ number_format($product->price, 2) }} for 5 pcs</p>
                                </div>

                                <!-- Price -->
                                <p class="text-gray-800 font-medium">
                                    ₱{{ number_format($product->price * $product->quantity, 2) }}
                                </p>

                                <!-- Quantity Controls -->
                                <div class="flex items-center space-x-2">
                                    <button wire:click="decreaseQuantity({{ $index }})" class="px-3 py-1 bg-gray-200 text-sm rounded-md">-</button>
                                    <span>{{ $product->quantity }}</span>
                                    <button wire:click="increaseQuantity({{ $index }})" class="px-3 py-1 bg-gray-200 text-sm rounded-md">+</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Delivery Information -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm">Name</label>
                <input type="text" wire:model="name"
                    class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none"
                    required>

                <label class="block text-gray-700 text-sm mt-4">Contact Number</label>
                <input type="text" wire:model="contact_number"
                    class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">

                <label class="block text-gray-700 text-sm mt-4">Street</label>
                <select wire:model="street"
                    class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    <option>Select a street</option>
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

                <label class="block text-gray-700 text-sm mt-4">City</label>
                <input type="text" wire:model="city" readonly
                    class="w-full border-gray-200 rounded-md p-3 bg-gray-100 focus:ring-0 outline-none">
            </div>

            <!-- Payment Method -->
            <div class="mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Payment Method</h2>
                <div>
                    <input type="radio" wire:model="paymentMethod" value="cod" id="cod" class="mr-2">
                    <label for="cod" class="text-gray-600">Cash on Delivery (COD)</label>
                </div>
                <div>
                    <input type="radio" wire:model="paymentMethod" value="gcash" id="gcash" class="mr-2">
                    <label for="gcash" class="text-gray-600">GCash</label>
                </div>

                @if ($paymentMethod === 'gcash')
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm">GCash Mobile Number</label>
                        <input type="text" wire:model="gcashNumber"
                            class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                        @error('gcashNumber')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
            </div>

            <!-- Total Price & Place Order -->
            <div>
                <p class="text-lg font-semibold text-gray-800 mb-4">Total: ₱{{ number_format($total, 2) }}</p>
                <button wire:click="placeOrder"
                    class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-150">
                    Place Order
                </button>
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
                <div class="mt-4 p-4 bg-green-100 text-green-800 rounded-md">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>

        <script>
            // Show or hide GCash 
            document.addEventListener('DOMContentLoaded', function() {
                const gcashRadio = document.getElementById('gcash');
                const codRadio = document.getElementById('cod');
                const gcashInfo = document.getElementById('gcashInfo');

                codRadio.addEventListener('change', toggleGcashInfo);
                gcashRadio.addEventListener('change', toggleGcashInfo);

                function toggleGcashInfo() {
                    gcashInfo.classList.toggle('hidden', !gcashRadio.checked);
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const placeOrderBtn = document.querySelector('button');
                const orderModal = document.getElementById('orderModal');
                const closeModalBtn = document.getElementById('closeModalBtn');


                placeOrderBtn.addEventListener('click', function() {
                    orderModal.classList.remove('hidden');
                });


                closeModalBtn.addEventListener('click', function() {
                    orderModal.classList.add('hidden');
                });
            });
        </script>
    </body>
</div>
