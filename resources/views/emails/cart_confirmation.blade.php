<!DOCTYPE html>
<html>
<head>
    <title>Cart Order Confirmation</title>
</head>
<body>
    <h1>Thank you for your order, {{ $name }}!</h1>
    <p>Your cart has been successfully processed. Below are the details of your items:</p>
    <ul>
        @foreach ($cartItems as $item)
            <li>
                {{ $item['quantity'] }} x {{ $item['product_name'] }} 
                - ₱{{ number_format($item['total_price'], 2) }}
            </li>
        @endforeach
    </ul>
    <p><strong>Total Price:</strong> ₱{{ number_format($totalPrice, 2) }}</p>

    <h2>Order Summary:</h2>
    <p><strong>Shipping Address:</strong> {{ $street }}, {{ $city }}</p>
    <p><strong>Contact Number:</strong> {{ $contact_number }}</p>
    <p><strong>Payment Method:</strong> {{ ucfirst($payment_method) }}</p>
    @if ($payment_method === 'gcash')
        <p><strong>GCash Number:</strong> {{ $gcash_number }}</p>
    @endif

    <p>Thank you for shopping with us!</p>
</body>
</html>
