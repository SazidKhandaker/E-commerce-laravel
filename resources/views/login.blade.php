@extends('master');
@section('content');

</html>

<h1>Login Page</h1>
<div class="container loginpage">

    <div class="row">

        <div class="col-sm-4 col-sm-offset-4" >
            <div

;
  "
            ></div>

            <form class="navbar-form navbar-left" role="search" action="login" method="POST" >
                <div class="form-group">
                    <p >Email:</p>
                    @csrf

                    <input type="text"  name="email" class="form-control dop" placeholder="email">

                </div>

                <div class="form-group">
                    <p >Password:</p>
                    <input type="password" name="password" class="form-control passd" placeholder="password">
                </div>
                <div class="">
                    <button type="submit" class="btn btn-info btn-lg center">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
