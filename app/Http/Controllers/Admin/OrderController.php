<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function index()
    {
        // Fetch orders with user information using DB facade
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name as user_name', 'users.email as user_email')
            ->where('oredr.status','=','pending')
            ->get();
        if (!$orders) {
            return redirect()->back()->with('error', 'Pending order not found.');
        }

        return view('admin.pendingorder', ['orders' => $order]);
    }

    public function delivered()
    {
        // Fetch the delivered order details with user information
        $order = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.*', 'users.name as user_name', 'users.email as user_email')
            ->where('orders.status','=','delivered') // Ensure it's a delivered order
            ->get();

        // Check if the order exists
        if (!$order) {
            return redirect()->back()->with('error', 'Delivered order not found.');
        }

        // Return the delivered order view with order and user details
        return view('admin.deliveredorder', ['orders' => $order]);
    }


    public function edit(){
        return view('admin.editorder');
    }
}
