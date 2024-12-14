<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg mt-10">
        <!-- Header Section -->
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-indigo-600">Order Confirmation</h1>
        </header>

        <!-- Greeting Section -->
        <section class="mb-6">
            <p class="text-lg text-gray-800">Dear <span class="font-semibold text-indigo-600">{{ $orderDetails['name'] }}</span>,</p>
            <p class="mt-2 text-gray-700">Thank you for your order! Here are the details:</p>
        </section>

        <!-- Order Summary Section -->
        <section class="mb-6">
            <h2 class="text-xl font-semibold text-indigo-600">Order Summary:</h2>
            <ul class="list-none space-y-2 mt-2 text-gray-700">
                <li><strong class="font-semibold">Product Name:</strong> {{ $orderDetails['product_name'] }}</li>
                <li><strong class="font-semibold">Price:</strong> ₱{{ number_format($orderDetails['product_price'], 2) }}</li>
                <li><strong class="font-semibold">Quantity:</strong> {{ $orderDetails['quantity'] }}</li>
                <li><strong class="font-semibold">Total Price:</strong> ₱{{ number_format($orderDetails['total_price'], 2) }}</li>
            </ul>
        </section>

        <!-- Shipping Information Section -->
        <section class="mb-6">
            <h3 class="text-lg font-semibold text-indigo-600">Shipping Information:</h3>
            <p><strong class="font-semibold">Contact Number:</strong> {{ $orderDetails['contact_number'] }}</p>
            <p><strong class="font-semibold">Address:</strong> {{ $orderDetails['street'] }}, {{ $orderDetails['city'] }}</p>
        </section>

        <!-- Payment Information Section -->
        <section class="mb-6">
            <h3 class="text-lg font-semibold text-indigo-600">Payment Information:</h3>
            <p><strong class="font-semibold">Payment Method:</strong> {{ ucfirst($orderDetails['payment_method']) }}</p>
            @if ($orderDetails['payment_method'] === 'gcash')
                <p><strong class="font-semibold">GCash Number:</strong> {{ $orderDetails['gcash_number'] }}</p>
            @endif
        </section>

        <!-- Footer Section -->
        <section class="mt-8 text-center">
            <p class="text-gray-700">We will process your order and notify you once it's shipped.</p>
            <p class="text-gray-700 mt-2">Thank you for shopping with us!</p>
        </section>

        <!-- Footer -->
        <footer class="mt-8 text-center text-gray-600 text-sm">
            <p>&copy; 2024 Lanmar BakeShoppe. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>