@extends('master');
@section('content');
<div class="container">
 <div class="row">

     <div class="col-sm-6">
         <img class="detail-img" src="{{$product['gallery']}}" alt="">

     </div>

     <div class="col-sm-6">
         <a href="/">Go back</a>
         <h2> {{$product['name']}}</h2>
         <h3> price: {{$product['price']}}</h3>
        <h4> Category: {{$product['category']}}</h4>
         <h4> Decsprition: {{$product['description']}}</h4>
         <br> <br>
         <form action="/add_to_cart" method="POST">
             @csrf
             <input type="hidden" name="product_id" value={{$product['id']}}>
             <button class="btn btn-primary">Add TO Cart</button>
         </form>

         <br> <br>

         <br> <br>
     </div>
 </div>
    </div>

@endsection
