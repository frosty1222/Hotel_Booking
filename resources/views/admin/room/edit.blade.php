@extends('layouts.admin')
@section('title','Edit Room ')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
           @if ($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col-md-8">
                <form action="{{route('room.update',$room->id)}}" method="POST" role="form"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <legend>Form Edit</legend>
                    <div class="form-group">
                        <label for="">type</label>
                        <input type="text" class="form-control" name="type" value="{{$room->type}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="upload" value="{{$room->image}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" value="{{$room->price}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Sale Price</label>
                        <input type="text" class="form-control" name="sale_price" value="{{$room->sale_price}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" name="category" value="{{$room->category_id}}" placeholder="Input field">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
