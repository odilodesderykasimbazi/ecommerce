@extends('layouts.master')


@section('content')

<div class="content px-4 mt-1">
@if(Session::has('success'))
                     <div class="alert alert-success">{{Session::get('success')}}</div>
                     @endif

                     @if(Session::has('failed'))
                     <div class="alert alert-success">{{Session::get('failed')}}</div>
                     @endif
        <div class="card py-3 px-4">
            <div class="card-header">
               <h4>Products<a href="{{url('/product')}}" class="btn btn-primary btn-sm float-end">Add Product</a></h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Produc category</th>
                        <th>Product name</th>
                        <th>image</th>
                        <th>quantity</th>
                        <th>selling Amount</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prod as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->categorys->categoryname}}</td>
                        <td>{{$item->product_name}}</td>
                        <td>
                        <img src="{{asset('uploads/products/'.$item->image)}}" height="100px" width="100px" alt=""></td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->selling_price}}</td>
                        <td><a href="{{url('editProduct/'.$item->id)}}" class="btn btn-primary btn-sm float-end">Edit</a></td>
                        <td><a href="{{url('deleteProduct/'.$item->id)}}" class="btn btn-danger btn-sm float-end">Delete</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

</div>

@endsection('content')