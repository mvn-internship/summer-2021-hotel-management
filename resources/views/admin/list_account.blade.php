@extends('admin.layouts.master')
@section('title','List Account')
@section('main')
<!--[ Recent Users ] start-->
<div class="col-xl-12 col-md-10">
    <div class="card Recent-Users">
        <div class="card-header">
            <h5>List Accounts</h5>
        </div>
        <div class="card-block px-0 py-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Avatar</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Create_at</th>
                            <th>Update_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="unread">
                            <td>1</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-1.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>Email1@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Manager</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-account')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>2</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-2.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Email2@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Employee</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="{{asset('/admin/edit-account')}}" class="label theme-bg2 text-white f-12">Delete</a><a href="#!" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>3</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-1.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Email3@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Employee</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="{{asset('/admin/edit-account')}}" class="label theme-bg2 text-white f-12">Delete</a><a href="#!" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>4</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-3.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Email@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Employee</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-account')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>5</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-3.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Email5@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Manager</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-account')}}" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>6</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-1.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-red f-10 m-r-15"></i>Email6@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Employee</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="#!" class="label theme-bg text-white f-12">Edit</a></td>
                        </tr>
                        <tr class="unread">
                            <td>7</td>
                            <td><img class="rounded-circle" style="width:40px;" src="{{asset('images/user/avatar-2.jpg')}}" alt="activity-user"></td>
                            <td>
                                <h6 class="text-muted"><i class="fas fa-circle text-c-green f-10 m-r-15"></i>Email7@gmail.com</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">AXC123xya</h6>
                            </td>
                            <td>
                                <h6 class="mb-1">Manager</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td>
                                <h6>2021 MAY 11 9:00</h6>
                            </td>
                            <td><a href="#!" class="label theme-bg2 text-white f-12">Delete</a><a href="{{asset('/admin/edit-account')}}" class="label theme-bg text-white f-12">Edit</a></td>
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
