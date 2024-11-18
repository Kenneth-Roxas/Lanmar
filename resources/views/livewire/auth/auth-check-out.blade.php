<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <style>
        select.scrollable {
            max-height: 150px;
            /* Adjust the height as needed */
            overflow-y: auto;
        }
    </style>

    <body class="p-4 bg-gray-300">

        <div class="max-w-lg mx-auto p-6 rounded-lg shadow-md bg-slate-200">
            <h1 class="text-xl text-center font-semibold text-gray-800 mb-6">Checkout</h1>

            <!-- Product List -->
            <div class="border border-gray-200 shadow-2xl rounded-lg p-4 bg-gray-50 mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Products</h2>
                <div class="space-y-4">
                    <!-- Product Item -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ url('Picture/bongga.jpg') }}" alt="Product Image" class="w-16 h-16 rounded-md">
                        <div class="flex-1">
                            <p class="text-gray-800 font-medium">Rosy Whirls</p>
                            <p class="text-sm text-gray-500">10pcs for ₱150.00</p>
                        </div>
                        <p class="text-gray-800 font-medium">₱150.00</p>
                    </div>
                    <!-- Repeat above div for more products as needed -->
                </div>
            </div>

            <!-- Delivery Information -->
            <div class="border border-gray-200 shadow-2xl rounded-lg p-4 bg-gray-50 mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Delivery Address</h2>
                <div class="space-y-4">
                    <input type="text" placeholder="Full Name"
                        class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    <input type="text" placeholder="Phone Number"
                        class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                    <!-- Street Selection -->
                    <label class="block text-gray-700 text-sm">Street</label>
                    <select
                        class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none scrollable">
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
                        <!-- Add more streets specific to Virac, Catanduanes as needed -->
                    </select>

                    <!-- City Selection (Virac only) -->
                    <label class="block text-gray-700 text-sm">City</label>
                    <select class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                        <option>Virac</option>
                    </select>
                </div>
            </div>

            <!-- Payment Method -->
            <div class="border border-gray-200 shadow-2xl rounded-lg p-4 bg-gray-50 mb-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Payment Method</h2>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <input type="radio" id="cod" name="paymentMethod" value="cod"
                            class="mr-2 text-blue-500 focus:ring-0">
                        <label for="cod" class="text-gray-600">Cash on Delivery(COD)</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="gcash" name="paymentMethod" value="gcash"
                            class="mr-2 text-blue-500 focus:ring-0">
                        <label for="gcash" class="text-gray-600">GCash</label>
                    </div>
                </div>

                <!-- GCash Payment Info (conditional) -->
                <div id="gcashInfo" class="mt-4 hidden shadow-2xl">
                    <label class="block text-sm text-gray-700 mb-1">GCash Mobile Number</label>
                    <input type="text" placeholder="09XXXXXXXXX"
                        class="w-full border-gray-200 rounded-md p-3 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>

            <!-- Order Summary -->
            <div class="flex items-center justify-between pt-6">
                <p class="text-lg font-semibold text-gray-800">Total: ₱150.00</p>
                <a href="{{route('send.order.confirmation')}}"><button
                    class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-150">Place
                    Order</button></a>
            </div>

            <div id="orderModal"
                class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
                <div class="bg-white p-8 rounded-lg shadow-xl w-96">
                    <h2 class="text-xl font-semibold text-center text-gray-800 mb-4">Order Confirmation</h2>
                    <p class="text-gray-700 text-center mb-6">Thank you for ordering! Please open your email and confirm your order</p>
                    <div class="flex justify-center space-x-4">
                        <button id="closeModalBtn"
                            class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // Show or hide GCash input based on selected payment method
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

                // Show the modal when the "Place Order" button is clicked
                placeOrderBtn.addEventListener('click', function() {
                    orderModal.classList.remove('hidden');
                });

                // Close the modal when the "Close" button is clicked
                closeModalBtn.addEventListener('click', function() {
                    orderModal.classList.add('hidden');
                });
            });
        </script>
    </body>
</div>
