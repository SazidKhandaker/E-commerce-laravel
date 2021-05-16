@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="wrape">
                <h2 class="black"> My Orders</h2>
                @foreach($orders as $item)
                    <div class="row search-item list-divider">
                        <div class="col-sm-5">
                            <a href="detail/{{$item->id}}">
                                <img class="product-img" src="{{$item->product->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3>Name :{{$item->product->name}}</h3>
                                <h5>Delivery status :{{$item->product->status }}</h5>
                                <h5>Address: {{$item->address}}</h5>
                                <h5>Payment Status :{{$item->payment_status}}</h5>
                                <h5>Payment Method :{{$item->payment_method}}</h5>
                                <h5>Price :{{$item->product->price}} BDT</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
