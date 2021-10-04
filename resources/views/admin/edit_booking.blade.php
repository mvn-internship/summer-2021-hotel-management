@extends('admin.layouts.master')
@section('title','Edit Booking')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Edit Booking</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                <label for="inputUser" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <select required class="form-control" id="inputUser">
                        <option>VDT</option>
                        <option>John</option>
                    </select>
               </div>
            </div>
           <div class="form-group row">
                <label for="inputStart" class="col-sm-2 col-form-label">Date Start</label>
                <div class="col-sm-10">
                    <input required  type="date" class="form-control" id="inputStart">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEnd" class="col-sm-2 col-form-label">Date End </label>
                <div class="col-sm-10">
                    <input required  type="date" class="form-control" id="inputEnd">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputType" class="col-sm-2 col-form-label">Type Room</label>
                <div class="col-sm-10">
                    <select required class="form-control" id="inputType">
                        <option>Single</option>
                        <option>Dou</option>
                    </select>
               </div>
            </div>
            <div class="form-group row">
                <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <input required  type="text" class="form-control" id="inputQuantity" placeholder="Quantity">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputReserve" class="col-sm-2 col-form-label">Reserve</label>
                <div class="col-sm-10">
                    <input required  type="text" class="form-control" id="inputReserve" placeholder="Reserve">
                </div>
            </div>
            <div class="form-group row">
                    <label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputStatus">
                            <option>Done</option>
                            <option>Await</option>
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
