@extends('layouts.admin')
@section('title','Dish edit')
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
                <form action="{{route('dish.update',$dish->id)}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <legend>Form Edit</legend>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$dish->name}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="upload" value="{{$dish->image}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" value="{{$dish->price}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Sale Price</label>
                        <input type="text" class="form-control" name="sale_price" value="{{$dish->sale_price}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Dish category</label>

                        <select name="dish_category_id" id="input" class="form-control" required="required">
                            <option value=""></option>
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
