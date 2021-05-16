@extends('master');
@section('content');
<div class="container loginpage">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4" >
            <form class="navbar-form navbar-left" role="search" action="register" method="POST" >
                @csrf
                <div class="form-group">

                <lable>User name</lable>
                    <input type="text"  name="name" class="form-control" placeholder="user name">
                </div>
                <div class="form-group">

                    <lable>User email    </lable>
                    <input type="text"  name="email" class="form-control" placeholder="email">
                </div>
                <div class="form-group">
                    <lable>Password  </lable>
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="center">
                    <button type="submit" class="btn btn-success">Sign up</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
