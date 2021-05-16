@extends('master')

@section('title')
    Search
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h4>Search Results</h4>
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item d-flex">
                            <img src="{{$product->gallery}}" style="width: 120px; margin-right: 15px"
                                 alt="{{ $product->name }}">
                            <div class="">
                                <h4>
                                    <a href="{{ route('product.detail', $product->id) }}">{{$product->name}}</a>
                                </h4>
                                <p>Price: {{$product->price}}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
