@extends('user.layout.master')

@section('title')
    Hotel | Login
@endsection

@section('content')
    <div class="hero-wrap" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2">
                            <span class="mr-2"><a href="{{ route('users.index') }}">Home</a></span>
                            <span class="fa fa-long-arrow-right"></span>
                            <span>Login</span>
                        </p>
                        <h1 class="mb-4 bread">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-page ftco-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card-login">
                        <div class="card-headers text-center">
                            <h2>Login Now</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="passwords" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                    <div class="remember">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember_token">
                                        <label class="form-check-label" for="remember-me">Remember me</label>
                                    </div>
                                    <div class="forgot-password">
                                        @if (Route::has('password.request'))
                                            <a class="btn" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group text-center font-italic">
                                    <span>Dont't have an account?</span>
                                    <a class="btn register-here" href="{{ route('register') }}">
                                        Register Here
                                    </a>
                                </div>
                                <button type="submit" class="btn btn-login">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
