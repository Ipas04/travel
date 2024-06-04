<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController
{
    public function index()
    {
        $orders = Order::with('destination')->get();

        return view('frontend.admin.order.index', compact([
            'orders'
        ]));
    }

    public function show($id)
    {
        $order = Order::with('destination')->findOrFail($id);

        return view('frontend.admin.order.show', compact([
            'order'
        ]));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('admin.order.index');
    }
}
