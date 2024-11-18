<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            background-color: #f7fafc;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2rem;
            max-width: 500px;
            margin: 0 auto;
            text-align: center;
        }
        .header {
            font-size: 1.5rem;
            font-weight: 600;
            color: #4A5568;
            margin-bottom: 1.5rem;
        }
        .body-text {
            color: #4A5568;
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        .button {
            display: inline-block;
            background-color: transparent;
            color: #3182ce;
            font-weight: bold;
            padding: 12px 24px;
            border: 2px solid #3182ce;
            border-radius: 25px;
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .button:hover {
            background-color: #3182ce;
            color: white;
            border-color: #3182ce;
        }
        .footer {
            margin-top: 2rem;
            color: #A0AEC0;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header">Hello, {{ $userName }}!</h1>
        <p class="body-text">We’re excited to confirm your order with us. Please review the details of your order and confirm it by clicking the button below.</p>
        
        <!-- Order details (example) -->
        <div class="order-details" style="text-align: left; margin-bottom: 2rem;">
            <p><strong>Order Number:</strong> #123456789</p>
            <p><strong>Product Name:</strong> Rosy Whirls</p>
            <p><strong>Order Total:</strong> ₱150.00</p>
            <p><strong>Payment Method:</strong> Cash on Delivery</p>
        </div>

        <a href="{{ route('greeting') }}" class="button">Confirm Order</a>

        <p class="footer">If you have any questions or need assistance, feel free to reach out to our facebook page</p>
    </div>
</body>
</html>
