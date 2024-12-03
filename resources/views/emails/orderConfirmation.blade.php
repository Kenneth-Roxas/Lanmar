<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 0 auto; padding: 20px;">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <h1 style="color: #333; font-size: 24px; margin: 0;">Order Confirmation</h1>
            </td>
        </tr>
        <tr>
            <td style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <p style="color: #555; font-size: 16px;">Dear {{ $orderDetails['name'] }},</p>
                <p style="color: #555; font-size: 16px;">Thank you for your order! Here are the details:</p>
                <ul style="list-style-type: none; padding: 0;">
                    <li style="color: #555; font-size: 16px; margin-bottom: 10px;"><strong>Contact Number:</strong> {{ $orderDetails['contact_number'] }}</li>
                    <li style="color: #555; font-size: 16px; margin-bottom: 10px;"><strong>Delivery Address:</strong> {{ $orderDetails['street'] }}, {{ $orderDetails['city'] }}</li>
                    <li style="color: #555; font-size: 16px; margin-bottom: 10px;"><strong>Payment Method:</strong> {{ ucfirst($orderDetails['payment_method']) }}</li>
                    @if ($orderDetails['gcash_number'])
                        <li style="color: #555; font-size: 16px; margin-bottom: 10px;"><strong>GCash Number:</strong> {{ $orderDetails['gcash_number'] }}</li>
                    @endif
                    <li style="color: #555; font-size: 16px; margin-bottom: 10px;"><strong>Total:</strong> {{ $orderDetails['total'] }}</li>
                </ul>
                <p style="color: #555; font-size: 16px;">We are preparing your order and will notify you once it's ready for delivery.</p>
                <p style="color: #555; font-size: 16px;">Best regards,<br>Lan-Mar BakeShoppe</p>
            </td>
        </tr>
    </table>    
</body>

</html>
