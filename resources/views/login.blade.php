@extends('master')

@section('title')
    Login
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                       name="email" id="email" placeholder="Your email address"
                                       value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password"
                                       class="form-control  @error('password') is-invalid @enderror"
                                       id="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a class="m-lg-3" href="{{ route('auth.register') }}">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
