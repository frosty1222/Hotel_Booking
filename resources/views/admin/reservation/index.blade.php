<br>
@extends('layouts.admin')
@section('title','Reservation view')
@section('admin')
<div class="row">
        <div class="col-md-12">
        @if ($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <legend>Reservation View</legend>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Type_Room</th>
                        <th>Date Check in</th>
                        <th>Date Check out</th>
                        <th>Adult</th>
                        <th>Children</th>
                        <th>Message</th>
                        <th>Sending Day</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1;?>
                    @foreach($reservation as $val)
                    <tr>
                        <td>{{$n++}}</td>
                        <td>{{$val['name']}}</td>
                        <td>{{$val['phone']}}</td>
                        <td>{{$val['email']}}</td>
                        <td>
                            @if($val['type_room'] == 1)
                             Single Room
                            @elseif($val['type_room'] == 2)
                            Family Room
                            @elseif($val['type_room'] == 3)
                            Presidential Room
                            @elseif($val['type_room'] == 4)
                            Another Room
                            @elseif($val['type_room'] == 5)
                            Luxury Room
                            @elseif($val['type_room'] == 6)
                            Delux Room
                            @endif
                        </td>
                        <td>{{$val['date_check_in']}}</td>
                        <td>{{$val['date_check_out']}}</td>
                        <td>{{$val['adult']}}</td>
                        <td>{{$val['children']}}</td>
                        <td>{{$val['message']}}</td>
                        <td>{{$val['created_at']}}</td>
                        @if($check_role == 1)
                        <td>
                        <form action="{{route('reservation.destroy',$val['id'])}}" method="POST">
                        <a class="btn btn-primary" href="{{route('reservation.edit',$val['id'])}}"><i class="fa fa-pen"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$reservation->links()}}
        </div>
    </div>
@stop
