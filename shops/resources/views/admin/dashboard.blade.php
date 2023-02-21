@extends('layouts.master')


@section('content')
<div class="content px-4 mt-1">
@if(Session::has('success'))
                     <div class="alert alert-success">{{Session::get('success')}}</div>
                     @endif

                     @if(Session::has('success'))
                     <div class="alert alert-success">{{Session::get('failed')}}</div>
                     @endif
        <div class="card py-3 px-4">
            <div class="card-header">
               <h4>Categories<a href="{{url('add-category')}}" class="btn btn-primary btn-sm float-end">Add category</a></h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Category</th>
                        <th>image</th>
                        <th>slug</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->categoryname}}</td>
                        <td>
                        <img src="{{asset('uploads/category/'.$item->image)}}" height="100px" width="100px" alt=""></td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->description}}</td>
                        <td><a href="{{url('editCategory/'.$item->id)}}" class="btn btn-primary btn-sm float-end">Edit</a></td>
                        <td><a href="{{url('deleteCategory/'.$item->id)}}" class="btn btn-danger btn-sm float-end">Delete</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>

</div>

@endsection('content')