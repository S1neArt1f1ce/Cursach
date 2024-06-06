@extends('layout.layout')
@section('content')
    <div class="container">
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        @if (empty($cart))
            <p>Your cart is empty</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $id => $details)
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>
                                <form action="{{ route('cart.update', $id) }}" method="POST">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}">
                                    <button type="submit">Update</button>
                                </form>
                            </td>
                            <td>${{ $details['price'] }}</td>
                            <td>${{ $details['price'] * $details['quantity'] }}</td>
                            <td>
                                <a href="{{ route('cart.remove', $id) }}">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <a data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 w-100" href="/order">Make an
                order</a>
        @endif
    </div>
@endsection
