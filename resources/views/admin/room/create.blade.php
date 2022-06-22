@extends('layouts.admin')
@section('title','Create')
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
                <form action="{{route('room.store')}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <legend>Form Edit</legend>
                    <div class="form-group">
                        <label for="">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="upload" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Sale Price</label>
                        <input type="text" class="form-control" name="sale_price" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control">
                            @foreach ($category as $val)
                            <option value="{{$val['id']}}">{{$val['room_type']}}</option>
                            @endforeach
                        </select>
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
