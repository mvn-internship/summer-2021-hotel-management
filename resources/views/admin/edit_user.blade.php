@extends('admin.layouts.master')
@section('title','Edit User')
@section('main')
<div class=" card col-md-10 offset-1">
    <div class="card-header">
        <h3 class="mb-4">Edit User</h3>   
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
                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                     <input required  type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                     <input required  type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                     <input required  type="text" class="form-control" id="inputPhone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputIdentity" class="col-sm-2 col-form-label">Identity</label>
                <div class="col-sm-10">
                     <input required  type="text" class="form-control" id="inputIdentity" placeholder="Identity Card">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNational" class="col-sm-2 col-form-label">National</label>
                <div class="col-sm-10">
                     <select required  class="form-control" id="inputNational">
                         <option>Viet Nam</option>
                         <option>Japan</option>
                     </select>
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="0" checked>
                            <label class="form-check-label" for="gridRadios1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="1">
                            <label class="form-check-label" for="gridRadios2">
                            Female
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
