@extends('master')

@section('title')
    Home Page
@endsection

@section('content')

    @include('partials.slider')

    <div class="container my-5">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card mb-3">
                        <img src="{{$product->gallery}}" class="card-img-top product-img" alt="{{$product->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">Buy now
                                ({{$product->price}} BDT)</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection