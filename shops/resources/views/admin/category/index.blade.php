@extends('layouts.master')


@section('content')
<div class="content px-4 mt-1">
   <div class="card py-1">
       <div class="card-header">
         <h5>add category<a href="{{url('admin-page')}}" class="btn btn-primary btn-sm float-end">back</a></h5>
    </div>
    <div class="card-body px-20">
              <form action="{{url('addCate')}}" method="POST" enctype="multipart/form-data">
              @if(Session::has('success'))
                     <div class="alert alert-success">{{Session::get('success')}}</div>
                     @endif

                     @if(Session::has('failed'))
                     <div class="alert alert-success">{{Session::get('failed')}}</div>
                     @endif
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">category name</label>
                        <input type="text" class="form-control" name="categoryname" placeholder="categoryname">
                        <span class="text-danger">@error('categoryname'){{$message}}@enderror</span>
                       
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="slug">
                        <span class="text-danger">@error('slug'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3 mt-3">
                        <textarea class="form-control" rows="2" name="description" placeholder="description"></textarea>
                        <span class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-2">
                        <label for="">status</label>
                        <input type="checkbox"  name="status">
                        <span class="text-danger">@error('status'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-2">
                        <label for="">popular</label>
                        <input type="checkbox" name="popular">
                        <span class="text-danger">@error('popular'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">meta title</label>
                        <input type="text" class="form-control" name="metatitle" placeholder="meta title">
                        <span class="text-danger">@error('meta_title'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">image</label>
                        <input type="file" class="form-control"  name="image">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta description</label>
                        <textarea class="form-control" rows="2" name="metadescription" placeholder="meta description"></textarea>
                        <span class="text-danger">@error('meta_description'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta keywords</label>
                        <textarea class="form-control" rows="2" name="metakeywords" placeholder="meta keywords"></textarea>
                        <span class="text-danger">@error('meta_keywords'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">submit</button>
                    </div>
                </div>
              </form>
    </div>
    </div>
</div>


@endsection