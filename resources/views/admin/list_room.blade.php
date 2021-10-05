@extends('admin.layouts.master')
@section('title','List Room')
@section('main')
<!--[ Recent Users ] start-->
<div class="col-xl-12 col-md-10">
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>List Rooms</h5>
        </div>
        <div class="card-block px-0 py-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Create_at</th>
                            <th>Update_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="unread">
                            <td>1</td>
                            <td>
                                <h6 class="mb-1"><a href="{{asset('admin/detail-room')}}">Room 1</a></h6>
                            </td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td><h6><i class="fas fa-circle text-c-red f-10 m-r-15"></i>UnAvalible</h6></td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-room')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>2</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 2</a></h6>
                            </td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">3000000</h6>
                            </td>
                            <td><h6><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Avalible</h6></td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-room')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>3</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 3</a></h6>
                            </td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td><h6><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Avalible</h6></td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-room')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>4</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 4</a></h6>
                            </td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td><h6><i class="fas fa-circle text-c-red f-10 m-r-15"></i>UnAvalible</h6></td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-room')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>5</td>
                            <td>
                                <h6 class="mb-1"><a href="#">Room 5</a></h6>
                            </td>
                            <td>
                                <h6 class="text-muted">Single</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">2000000</h6>
                            </td>
                            <td><h6><i class="fas fa-circle text-c-red f-10 m-r-15"></i>UnAvalible</h6></td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-room')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <nav aria-label="..." class="nav-pagination row justify-content-center">
        <ul class="pagination col-md-3">
            <li class="page-item disabled ">
                <a class="page-link" tabindex="-1" href="#">Previous </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
<!--[ Recent Users ] end-->

<!-- [ Main Content ] end -->
@stop
