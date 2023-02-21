@extends('layouts.front')

@section('title')
Products
@endsection
@section('content')

<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{$cate->categoryname}}
        </h6>
    </div>
</div>
<div class="py-3">
    <div class="container">
        <h4>{{$cate->categoryname}}</h4>
        <div class="row">
               @foreach($product as $prodct)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <a href="{{url('viewCategories/'.$cate->slug.'/'.$prodct->slug)}}">
                      <img src="{{url('uploads/products/'.$prodct->image)}}" class="prd" alt="Product image">
                        <div class="card-body">
                              <h5>{{$prodct->product_name}}</h5>
                                <span class="float-start">{{$prodct->selling_price}} Ths</span>
                                <span class="float-end"> <s>{{$prodct->original_price}} Ths</s></span>
                       </div>
                       </a>
                    </div>
                 </div>
               @endforeach
        </div>
    </div>
 </div>

@endsection