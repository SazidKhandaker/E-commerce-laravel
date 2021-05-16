@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="col-sm-10">
                    <div class="wrape">
                        <h2>Your product cart</h2>

                        @if($cart->count())
                            <a href="ordernow" class="btn btn-success">Order Please</a> <br> <br>
                        @endif

                        @foreach($cart as $item)
                            <div class="row search-item list-divider">
                                <div class="col-sm-5">
                                    <a href="detail/{{$item->product->id}}">
                                        <img class="product-img" src="{{$item->product->gallery}}">
                                    </a>
                                </div>

                                <div class="col-sm-4">
                                    <div class="">
                                        <h3>{{$item->product->name}}</h3>
                                        <h5>Price: {{$item->product->price}} BDT</h5>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <form action="/removecart/{{$item->id}}"
                                          method="post">
                                        @csrf
                                        <button class="btn btn-warning"> Remove</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
