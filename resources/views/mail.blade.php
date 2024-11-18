<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Hello, {{ $userName }}</h1>
    <p>Please confirm your order by clicking the link below:</p>
    <a href="{{ $confirmationLink }}">Confirm Order</a>
</body>
</html>