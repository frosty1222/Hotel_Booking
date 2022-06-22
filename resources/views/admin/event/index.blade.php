@extends('layouts.admin')
@section('title','Event View')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
        @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <legend>Event table View</legend>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Image</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1;?>
                    @foreach($event as $val)
                    <tr>
                        <td>{{$n++}}</td>
                        <td>{{$val['name']}}</td>
                        <td>{{$val['time']}}</td>
                        <td><img src="{{asset('uploads')}}/{{$val['image']}}" alt="" width="70px"></td>
                        <td>{{$val['content']}}</td>
                        @if($check_role == 1)
                        <td>
                            <form action="{{route('event.destroy',$val['id'])}}" method="POST" role="form">
                            <a class="btn btn-primary" href="{{route('event.edit', $val['id'])}}"><i class="fa fa-pen"></i></a>
                             <a class="btn btn-primary" href="{{route('event.create')}}"><i class="fa fa-plus"></i></a>
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary" onclick="return confirm('are you sure?')">Submit</button>
                            </form>

                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
