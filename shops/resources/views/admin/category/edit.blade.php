@extends('layouts.master')


@section('content')

<div class="content px-4 mt-1">
    
    <div class="card py-3 px-4">
        <div class="card-header">
           <h4>Edit Category <a href="{{url('admin-page')}}" class="btn btn-primary btn-sm float-end">Back</a></h4>
        </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$cate->id)}}" method="POST" enctype="multipart/form-data">
             @method('PUT')
             @csrf
             <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">category name</label>
                        <input type="text" class="form-control" value="{{$cate->categoryname}}" name="categoryname" placeholder="categoryname">
                        <span class="text-danger">@error('categoryname'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" value="{{$cate->slug}}"name="slug"   placeholder="slug">
                        <span class="text-danger">@error('slug'){{$message}}@enderror<span>
                    </div>
                    <div class="col-md-12 mb-3 mt-3">
                        <textarea class="form-control" rows="2" name="description" placeholder="description">{{$cate->description}}</textarea> 
                        <span class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-2">
                        <label for="">status</label>
                        <input type="checkbox" {{$cate->status == "1" ? 'checked':''}}   name="status">
                        <span class="text-danger">@error('status'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-2">
                        <label for="">popular</label>
                        <input type="checkbox" {{$cate->popula == "1" ? 'checked':''}}  name="popular">
                        <span class="text-danger">@error('popular'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">meta title</label>
                        <input type="text" class="form-control" value="{{$cate->meta_title}}" name="metatitle" placeholder="meta title">
                        <span class="text-danger">@error('metatitle'){{$message}}@enderror</span>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    @if($cate->image)
                         <img src="{{asset('uploads/category/'.$cate->image)}}" height="60px"      width="100px" alt="image">
                    @endif
                        <input type="file" class="form-control"  name="image">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta description</label>
                        <textarea class="form-control" rows="2" name="metadescription" placeholder="meta description">{{$cate->meta_description}}</textarea>
                        <span class="text-danger">@error('meta_description'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">meta keywords</label>
                        <textarea class="form-control" rows="2" name="metakeywords" placeholder="meta keywords">{{$cate->meta_keyword}}</textarea>
                        <span class="text-danger">@error('meta_keywords'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">update</button>
                    </div>
                                
                    </div>
             </form>
        </div>
    </div>

</div>
@endsection