@extends('master');
@section('content');
<div class="container loginpage">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" >
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">

                    <input type="text" class="form-control" placeholder="email">
                </div>
                <div class="form-group">

                    <input type="password" class="form-control" placeholder="password">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
