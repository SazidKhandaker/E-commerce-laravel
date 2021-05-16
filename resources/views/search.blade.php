@extends('master');
@section('content');
<div class="custom-product">

<div class="col-sm-4">

</div>
    <div class="col-sm-4">

        <div class="wrape">
            <h2> Searching products</h2>
            @foreach($products as $item)
                <div class="search-item">
                    <a href="detail/{{$item['id']}}">
                        <img class="product-img" src="{{$item['gallery']}}" >
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <h5>{{$item['description']}}</h5>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </div>

@endsection
