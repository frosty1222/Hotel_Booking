@extends('layouts.admin')
@section('title','Reservation edit')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
        @if ($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
        <div class="col-md-12">
                <form action="{{route('reservation.update',$reservation->id)}}" method="POST" role="form">
                    <legend class="text-center text-success">Form Edit</legend>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$reservation->name}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="phone" class="form-control" name="phone" value="{{$reservation->phone}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$reservation->email}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Type_room</label>
                        <input type="text" class="form-control" name="type_room" value="{{$reservation->type_room}}" placeholder="Input field">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Date_check_in</label>
                        <input type="text" class="form-control" name="date_check_in" value="{{$reservation->date_check_in}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Date_check_out</label>
                        <input type="text" class="form-control" name="date_check_out" value="{{$reservation->date_check_out}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Adult</label>
                        <input type="text" class="form-control" name="adult" value="{{$reservation->adult}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Children</label>
                        <input type="text" class="form-control" name="children" value="{{$reservation->children}}" placeholder="Input field">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <input type="text" class="form-control" name="message" value="{{$reservation->message}}" placeholder="Input field" readonly>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
