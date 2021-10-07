@extends('admin.layouts.master')
@section('title','Create Room')
@section('main')
<div class="card col-md-10 offset-1">
    <div class="card-header">
        <h3>Create Room</h3>
    </div>
    <div class="card-block px-0 py-3">
        <form>
            <div class="form-group row">
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room Name</label>
                    <div class="col-sm-10">
                        <input required class="form-control" type="text" id="inputRoom" placeholder="Room Name">
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputDescripton" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <TextArea required class="form-control" type="text" id="inputDescription"></TextArea>
                    </div>
            </div>
            <div class="form-group row">
                    <label for="inputType" class="col-sm-2 col-form-label">Type Room</label>
                    <div class="col-sm-10">
                        <select required  class="form-control" id="inputType">
                            <option>Single</option>
                            <option>Dou</option>
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
