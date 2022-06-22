@extends('layouts.admin')
@section('title','Room index view')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
         @if($message = Session::get('successfully'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Type</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $n=1;?>
                @foreach($room as $val)
                <tr>
                    <td>{{$n++}}</td>
                    <td>{{$val['type']}}</td>
                    <td><img src="{{asset('uploads')}}/{{$val['image']}}" alt="" width="70px"></td>
                    <td>{{$val['price']}}</td>
                    <td>{{$val['sale_price']}}</td>
                    <td>{{$val['category_id']}}</td>
                    @if($check_role == 1)
                    <td>
                    <form action="{{route('category.destroy',$val['id'])}}" method="POST">
                    <a class="btn btn-primary" href="{{route('room.edit',$val['id'])}}"><i class="fa fa-pen"></i></a>
                    <a class="btn btn-primary" href="{{route('room.create')}}"><i class="fa fa-plus"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick='return confirm("Are you sure want to delete this ?")'>Delete</button>
                    </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$room->links()}}
        </div>
    </div>
@endsection
