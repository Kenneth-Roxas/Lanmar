<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .heading {
            font-size: 24px;
            color: #333;
            text-align: center;
        }
        .subheading {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }
        .list-item {
            font-size: 16px;
            color: #444;
            margin-bottom: 8px;
        }
        .list-item strong {
            color: #333;
        }
        .button {
            background-color: #3490dc;
            color: white;
            padding: 10px 20px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
        .button:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="container">
    <h1 class="heading">Booking Confirmation</h1>
    <p class="subheading">Thank you for booking with us! Here are your booking details:</p>
    
    <ul>
        <li class="list-item"><strong>Name:</strong> {{ $booking->name }}</li>
        <li class="list-item"><strong>Email:</strong> {{ $booking->email }}</li>
        <li class="list-item"><strong>Product:</strong> {{ $booking->product_name }}</li>
        <li class="list-item"><strong>Price:</strong> {{ $booking->price }}</li>
        <li class="list-item"><strong>Date:</strong> {{ $booking->date }}</li>
        <li class="list-item"><strong>Time:</strong> {{ $booking->time }}</li>
        <li class="list-item"><strong>Message:</strong> {{ $booking->message }}</li>
        @if ($booking->design)
            <li class="list-item"><strong>Design:</strong> <a href="{{ Storage::url($booking->design) }}" class="text-blue-500 hover:text-blue-700">View Design</a></li>
        @endif
    </ul>

    <p class="subheading mt-4">If you have any questions, feel free to reach out to us.</p>

    <div class="mt-6 text-center">
        <a href="#" class="button">Visit Our Website</a>
    </div>
</div>

</body>
</html>
