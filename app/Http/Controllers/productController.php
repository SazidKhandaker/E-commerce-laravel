<?php

namespace App\Http\Controllers;

use Database\Seeders\products;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    function index(){
          $data =product::all();
        return  view('product',['products'=>$data]);
    }

    function detail($id){

        $data= product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req ){


       $data =product::where('name','like','%'.$req->input('query').'%')->get();

      return view('search',['products'=>$data]);
    }

    function AddToCart(Request $req){

      if($req->session()->has('user')){
       $cart= new Cart;
       $cart->user_id=$req->session()->get('user')['id'];
       $cart->product_id=$req->product_id;
       $cart->save();
          return redirect('/');
      }else{

          return redirect('/login');
      }

    }
    static function cartItem(){

        $userid=Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
    }
    public function cartList(){
         $userId=session::get('user')['id'];
         $products=DB::table('cart')
             ->join('products','cart.product_id','=','products.id')
             ->where('cart.user_id',$userId)
             ->select('products.*','cart.id as cart_id')
             ->get();
         return view('cartlist',['products'=>$products]);

}
public function removeCart($id){

        Cart::destroy($id);
        return redirect('cartlist');
}
 public  function oderNow(){
     $userId=session::get('user')['id'];
     $totalmoney=   $products=DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->sum('products.price');
     return view('ordernow',['totalmoney'=>$totalmoney]);

 }
 public  function orderPlace(Request $req){
     $userId=session::get('user')['id'];
     $allcart=Cart::where('user_id',$userId)->get();


    foreach ($allcart as $cart)
    {

        $order=new Order;
        $order->product_id=$cart['product_id'];
        $order->user_id=$cart['user_id'];
        $order->status="pending";
        $order->payment_method=$req->payment;
        $order->payment_status="pending";
        $order->address=$req->address;
        $order->save();
        Cart::where('user_id',$userId)->delete();
    }
    $req->input();
    return redirect ('/');

 }

 public function myOrder(){

     $userId=Session::get('user')['id'];
     $orders=  DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
     return view('myorder',['orders'=>$orders]);
 }

}
