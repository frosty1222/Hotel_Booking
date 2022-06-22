@extends('layouts.admin')
@section('title','Dish Category View')
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
                        <th>Dish_type</th>
                        <th>Available_Dish</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1?>
                    @foreach ($dish_category as $val)
                    <tr>
                        <td>{{$n++}}</td>
                        <td>{{$val['dish_type']}}</td>
                        <td>{{$val['available_quantity']}}</td>
                        @if($check_role == 1)
                        <td>
                        <form action="{{route('discategory.destroy', $val['id'])}}" method="POST">
                        <a class="btn btn-primary" href="{{route('discategory.edit', $val['id'])}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-primary" href="{{route('discategory.create')}}"><i class="fa fa-plus"></i></a>
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
             {{$dish_category->links()}}
        </div>
    </div>
@endsection
