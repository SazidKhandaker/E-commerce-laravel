@extends('master')

@section('title')
    {{ $product['name'] }}
@endsection

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <img style="max-width: 100%" src="{{$product['gallery']}}" alt="">
            </div>

            <div class="col-sm-6">
                <a href="{{route('home')}}">Go back</a>

                <h2> {{$product['name']}}</h2>
                <h3> price: {{$product['price']}}</h3>
                <h4> Category: {{$product['category']}}</h4>
                <h4> Decsprition: {{$product['description']}}</h4>
                <br> <br>
                <form action="{{route('add-to-cart')}}" method="POST">
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
