<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DashboardController
{
    public function index()
    {
        $destinationCount = Destination::count();
        $orderCount = Order::count();
        $statusCount = DB::table('orders')
            ->select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get();
            
            $pendingOrder = $statusCount->where('status', 'Pending')->first();
            $pendingCount = $pendingOrder ? $pendingOrder->total : 0;
            
            $successOrder = $statusCount->where('status', 'Success')->first();
            $successCount = $successOrder ? $successOrder->total : 0;
            
            $cancelOrder = $statusCount->where('status', 'Cancel')->first();
            $cancelCount = $cancelOrder ? $cancelOrder->total : 0;

        return view('frontend.admin.dashboard.index', compact([
            'destinationCount',
            'orderCount',
            'pendingCount',
            'successCount',
            'cancelCount'
        ]));
    }
}
