@extends('user.layout.master')

@section('title')
    Booking
@stop

@section('content')
    <div class="hero-wrap" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                    <div class="text">
                        <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <span class="mr-2"><a href="{{ route('users.index') }}">Home</a></span> 
                            <span class="fa fa-long-arrow-right"></span>
                            <span class="mr-2"><a href="{{ route('rooms.index') }}">Room</a></span>
                            <span class="fa fa-long-arrow-right"></span> 
                            <span>Booking</span>
                        </p>
                        <h1 class="mb-4 bread">Booking Room</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-timeline ftco-bg">
        <div class="container">
    		<div class="row">
				<div class="col-md-12">
                    <ul class="bar">
                        <li class="active">Your Selection</li>
                        <li class="active">Your Details</li>
                        <li>Final Step</li>
                    </ul>
                </div>
			</div>
		</div>
    </section>
    <section class="booking-details">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="booking-card">
                        <div class="booking-card-content">
                            <div class="content-header">
                                <h4>Your Booking Details</h4>
                            </div>
                            <hr class="cont-hr">
                            <div class="content-details">
                                <div class="content-details-group">
                                    <div class="cont-group-item">
                                        <div class="cont-group-date">
                                            <div class="date-checkin">
                                                <p>Check In : </p>
                                                <p>19/09/2021</p>
                                                <p>12AM</p>
                                            </div>
                                            <div class="date-checkout">
                                                <p>Check Out : </p>
                                                <p>19/09/2021</p>
                                                <p>12AM</p>
                                            </div>
                                        </div>
                                        <hr class="cont-hr">
                                        <div class="cont-group-info-room">
                                            <div class="info-type-room info-type">
                                                <p>Type Room : </p>
                                                <p>Luxury Room</p> 
                                            </div>
                                            <hr class="cont-hr">
                                            <div class="info-quantity-room info-type">
                                                <p>Quantity : </p>
                                                <p>1</p>
                                            </div>
                                            <hr class="cont-hr">
                                            <div class="info-price-room info-type">
                                                <p>Price :  </p>
                                                <p>$34</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="booking-user-info">
                        <div class="user-info-header">
                            <h4>Enter Your Detais</h4>
                        </div>
                        <hr class="cont-hr">
                        <div class="user-info-form">
                            <form action="#" method="POST">
                            <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Phone">
                                </div>
                                <div class="form-group">
                                    <label for="identity_card">Identity Card</label>
                                    <input type="text" class="form-control" id="identity_card" placeholder="Identity Card">
                                </div>
                                <button type="submit" class="btn btn-booking">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop