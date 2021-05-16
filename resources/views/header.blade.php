<?php

use  App\Http\Controllers\productController;
$total=0;
if(Session::has('user')){
    $total=productController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">E-Shope</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home </a></li>
                <li><a href="/myorder">Order</a></li>



                </li>
            </ul>
            <form  action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input  name="query" type="text" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist">Cart-({{$total}})</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Logout</a></li>

                    </ul>
                </li>

                @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Sign_Up</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>
