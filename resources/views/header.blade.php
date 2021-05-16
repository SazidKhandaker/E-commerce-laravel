<form action="{{route('auth.logout')}}" id="logout" method="post">@csrf</form>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">E-shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <form class="d-flex" action="{{route('search')}}">
                        <input class="form-control me-2" type="search" placeholder="Search" name="query"
                               aria-label="Search" value="{{ request()->query('query') }}">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav">
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('my-orders')}}">My orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cartlist">Cart ({{auth()->user()->cart()->count()}})</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="nav-link" href="javascript:void(0)"
                                   onclick="confirm('Sure to logout?') && document.getElementById('logout').submit()">Logout</a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.login')}}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>