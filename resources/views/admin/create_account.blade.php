@extends('admin.layouts.master')
@section('title','Create Account')
@section('main')
<div class=" card col-md-10 offset-1">
    <div class="card-header">
        <h3 class="mb-4">Create Account</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input required  type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                     <input required type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputConfPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                     <input required type="password" class="form-control" id="inputConfPassword3" placeholder="Confirm Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputRole" class="col-sm-2 col-form-label">National</label>
                <div class="col-sm-10">
                     <select required  class="form-control" id="inputRole">
                         <option value="0">Manager</option>
                         <option value="1">Employee</option>
                     </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
