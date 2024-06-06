<!DOCTYPE html>
<html>

<head>
    <title>Your Order Confirmation</title>
</head>

<body>
    <h1>Thank you for your order, {{ $user->name }}!</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>Total: ${{ $order->total }}</p>
    <h2>Order Details:</h2>
    <ul>
        @foreach ($orderDetails as $item)
            <li>
                {{ $item->product->name }} - Quantity: {{ $item->quantity }} - Price: ${{ $item->price }}
            </li>
        @endforeach
    </ul>
</body>

</html>
