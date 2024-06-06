<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total
        ]);

        foreach ($cart as $id => $details) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $id,
                'quantity' => $details['quantity'],
                'price' => $details['price']
            ]);
        }

        session()->forget('cart');

        $this->sendOrderEmail($order);

        return redirect()->route('cart.index')->with('success', 'Your order has been placed successfully.');
    }

    protected function sendOrderEmail($order)
    {
        $user = Auth::user();
        $orderDetails = $order->items()->with('product')->get();

        Mail::send('emails.order', compact('user', 'order', 'orderDetails'), function ($message) use ($user) {
            $message->to($user->email);
            $message->from(config('mail.from.address'), config('mail.from.name'));
            $message->subject('Your Order Confirmation');
        });
    }
}
