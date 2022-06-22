@extends('layouts.admin')
@section('title','dish')
@section('admin')
@parent
<div class="row">
        <div class="col-md-12">
            <legend>Dish View</legend>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Sale Price</th>
                        <th>Image</th>
                        <th>Dish Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n=1;?>
                    @foreach($dish as $val)
                    <tr>
                        <td>{{$n++}}</td>
                        <td>{{$val['name']}}</td>
                        <td>{{$val['price']}}</td>
                        <td>{{$val['sale_price']}}</td>
                        <td><img src="{{asset('uploads')}}/{{$val['image']}}" alt="" width="70px" height="50px"></td>
                        <td>{{$val['dish_category_id']}}</td>
                        @if($check_role == 1)
                        <td>
                        <form action="{{route('dish.destroy',$val['id'])}}" method="POST">
                        <a class="btn btn-primary" href="{{route('dish.edit',$val['id'])}}"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-primary" href="{{route('dish.create')}}"><i class="fa fa-plus"></i></a>
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
        {{$dish->links()}}
        <br>
        <br>
        <br>
        <br>
        </div>
    </div>
@endsection
@section('script')
<script>
</script>
@endsection
