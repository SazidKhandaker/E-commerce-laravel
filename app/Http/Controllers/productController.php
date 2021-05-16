<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    function index()
    {
        $data = product::all();
        return view('product', ['products' => $data]);
    }

    function detail($id)
    {
        $data = product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search(Request $req)
    {
        $data = product::where('name', 'like', '%' . $req->input('query') . '%')->get();

        return view('search', ['products' => $data]);
    }

    function AddToCart(Request $request)
    {
        auth()->user()->cart()->create([
            'product_id' => $request->product_id
        ]);
        return redirect('/');
    }

    public function cartList()
    {
        $cart = auth()->user()->cart;
        return view('cartlist', compact('cart'));
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return back();
    }

    public function oderNow()
    {
        $cart = auth()->user()->cart()->with('product')->get();
        $totalmoney = collect($cart)->sum('product.price');
        return view('ordernow', ['totalmoney' => $totalmoney]);
    }

    public function orderPlace(Request $req)
    {
        $req->validate([
            'address' => ['required', 'max:255']
        ]);

        $userId = auth()->id();
        $allcart = auth()->user()->cart;


        foreach ($allcart as $cart) {
            $order = new order();
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }

    public function myOrder()
    {
        $orders = auth()->user()->orders()->with('product')->get();
        return view('myorder', compact('orders'));
    }

}
