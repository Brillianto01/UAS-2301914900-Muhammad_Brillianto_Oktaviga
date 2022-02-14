<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function store(Request $request)
    {
        $request['order_date'] = Carbon::now()->toDateString();
        // dd($request);
        $validatedData = $request->validate([
            'account_id' => 'required',
            'ebook_id' => 'required',
            'order_date' => 'required',
        ]);
        // dd($validatedData);
        Order::create($validatedData);
        return redirect()->intended('/home');
    }
    public static function cart($account_id)
    {
        $cart = Order::where('account_id', $account_id)->get();
        // dd($cart->ebook);
        return view('cart', ['cart' => $cart]);
    }

    public static function destroy($order)
    {

        // dd($order);
        Order::where('order_id', $order)->delete();
        // Order::destroy($order->order_id);
        return redirect()->intended('/home');
    }
}
