@extends('master');
@section('content');
<div class="custom-product">

    <div class="col-sm-10">



        <div class="wrape">
            <h2> Searching products</h2>
            <a href="ordernow"  class="btn btn-success">Order Please</a> <br> <br>
            @foreach($products as $item)
                <div class="row search-item list-divider">
                    <div class="col-sm-5">
                        <a href="detail/{{$item->id}}">

                            <img class="product-img" src="{{$item->gallery}}" >

                        </a>

                        </div>

                    <div class="col-sm-4">



                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>{{$item->description}}</h5>

                            </div>

                    </div>
                    <div class="col-sm-3">
                       <a  href="/removecart/{{$item->cart_id}}"  class="btn btn-warning"> Remove </a>
                    </div>

                </div>
            @endforeach
        </div>
        <a href="ordernow"  class="btn btn-success">Order Please</a> <br> <br>
    </div>
</div>

@endsection
