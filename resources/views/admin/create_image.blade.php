@extends('admin.layouts.master')
@section('title','Create Image')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create Image</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form entype="multipart">
            <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Image Name</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputName" placeholder="Image Name">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputImage" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="file" id="inputImage">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputRoom">
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
