<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmed</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-500 flex items-center justify-center h-screen">
    <div class="bg-gray-300 shadow-md rounded-lg p-8 max-w-md text-center">
        <h1 class="text-2xl font-extrabold text-green-600 mb-4">Thank you, {{ $userName }}!</h1>
        <p class="text-gray-700 text-lg">
            Your sweet treat is on its way! We've confirmed your order, and our bakers are busy preparing
            your order with the finest ingredients.
        </p>
        <div class="flex justify-center space-x-4 mt-5">
            <a href="{{route('home')}}"><button
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Close</button></a>
            <a href="{{route('product')}}"><button
                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Buy More</button></a>
        </div>
    </div>
</body>
</html>
