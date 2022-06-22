@extends('layouts.admin')
@section('title','Category View')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
        @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <legend>Category View</legend>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Room_type</th>
                        <th>Status</th>
                        <th>Available_room</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1?>
                    @foreach ($category as $val)
                    <tr>
                        <td>{{$n++}}</td>
                        <td>{{$val['room_type']}}</td>
                        <td>{{$val['status']}}</td>
                        <td>{{$val['available_room']}}</td>
                        @if($check_role ==1)
                        <td>
                        <form action="{{route('category.destroy', $val['id'])}}" method="POST">
                        <a class="btn btn-primary" href="{{route('category.edit', $val['id'])}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-primary" href="{{route('category.create')}}"><i class="fa fa-plus"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure want to delete this ?")'>Delete</button>
                        </form>
                        </td>
                         @else
                         <td>
                             <a href="http://127.0.0.1:8000/#/reservation/{{$val['id']}}">Book now</a>
                         </td>
                         @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
             {{$category->links()}}
        </div>
    </div>
@endsection
