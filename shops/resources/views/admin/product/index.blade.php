@extends('layouts.master')


@section('content')
<div class="content px-4 mt-1">
   <div class="card py-1">
       <div class="card-header">
         <h5 style="text-align:center">add Product</h5>
    </div>
    <div class="card-body px-20">
              <form action="{{url('addProduct')}}" method="POST" enctype="multipart/form-data">
              @if(Session::has('success'))
                     <div class="alert alert-success">{{Session::get('success')}}</div>
                     @endif

                     @if(Session::has('failed'))
                     <div class="alert alert-success">{{Session::get('failed')}}</div>
                     @endif
                @csrf
                <div class="row">
                    
                <div class="col-md-6 mb-3 mt-1">
                        <select class="form-control" name="cate_id" >
                        <option value="">--select category name--</option>
                            @foreach($category as $item)
                            <option  value="{{$item->id}}">{{$item->categoryname}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('productname'){{$message}}@enderror</span>
                       
                    </div>
                    <div class="col-md-6 mb-3 mt-1">
                        <input type="text" class="form-control" name="productname" placeholder="productname">
                        <span class="text-danger">@error('productname'){{$message}}@enderror</span>
                       
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="slug">
                        <span class="text-danger">@error('slug'){{$message}}@enderror</span>
                       
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">small description</label>
                        <textarea class="form-control" name="smalldescription" rows="1" placeholder="small description"></textarea>
                        <span class="text-danger">@error('smalldescription'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-12 mb-3 mt-3">
                        <textarea class="form-control" rows="2" name="description" placeholder="description"></textarea>
                        <span class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-2">
                        <label for="">Original Price</label>
                        <input type="number"  name="originalprice">
                        <span class="text-danger">@error('originalprice'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-2">
                        <label for="">selling price</label>
                        <input type="number" name="sellingprice">
                        <span class="text-danger">@error('sellingprice'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">quantity</label>
                        <input type="number" class="form-control"  name="quantity">
                        <span class="text-danger">@error('quantity'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Taxes</label>
                        <input type="number" class="form-control" rows="2" name="tax" placeholder="tax">
                        <span class="text-danger">@error('tax'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-4">
                        <label for="">status</label>
                        <input type="checkbox" name="status">
                        <span class="text-danger">@error('status'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3 mt-4">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                        <span class="text-danger">@error('trending'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">meta title</label>
                        <textarea class="form-control" name="metatitle" rows="1" placeholder="meta title"></textarea>
                        <span class="text-danger">@error('metatitle'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">meta keyword</label>
                        <textarea class="form-control" name="metakeyword" rows="1" placeholder="meta keyword"></textarea>
                        <span class="text-danger">@error('metakeyword'){{$message}}@enderror</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">meta description</label>
                        <textarea class="form-control" name="metadescription" rows="1" placeholder="meta description"></textarea>
                        <span class="text-danger">@error('metadescription'){{$message}}@enderror</span>
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