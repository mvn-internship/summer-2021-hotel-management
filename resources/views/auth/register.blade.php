@extends('user.layout.master')

@section('title')
    Hotel | Register
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
                            <span>Register</span>
                        </p>
                        <h1 class="mb-4 bread">Register</h1>
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
                            <h2>Register Now</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedbacks">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedbacks">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedbacks">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter address" value="{{ old('address') }}">
                                    @error('address')
                                        <span class="invalid-feedbacks">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedbacks">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="national">National</label>
                                        <select name="national" id="national" class="form-control">
                                            <option value="vietnam">Viet Nam</option>
                                            <option value="koria">Koria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="identity_card">Identity Card</label>
                                        <input type="text" name="identity_card" class="form-control" id="identity_card" placeholder="Enter identity card" value="{{ old('identity_card') }}">
                                        @error('identity_card')
                                            <span class="invalid-feedbacks">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group text-center font-italic">
                                    <span>Already have an account?</span>
                                    <a class="btn register-here" href="{{ route('login') }}">
                                        Login Here
                                    </a>
                                </div>
                                <button type="submit" class="btn btn-login">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
