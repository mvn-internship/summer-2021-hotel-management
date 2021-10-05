@extends('admin.layouts.master')
@section('title','Create User Of Room')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create User Of Room</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
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
                <label for="inputIdentity" class="col-sm-2 col-form-label">Identity Card</label>
                <div class="col-sm-10">
                    <input required  type="text" class="form-control" id="inputIdentity" placeholder="Identity Card">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputCheckin" class="col-sm-2 col-form-label">CheckIn</label>
                <div class="col-sm-10">
                    <input required  type="date" class="form-control" id="inputCheckin">
                </div>
            </div>
            <div class="form-group row">
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="Room">
                            <option>Room 1</option>
                            <option>Room 2</option>
                        </select>
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div> 
        </form>
    </div>
</div>
@stop
