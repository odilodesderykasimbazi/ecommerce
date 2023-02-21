@extends('layouts.front')

@section('title')
category
@endsection
@section('content')
<div class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>all category</h4>
                <div class="row">
                  @foreach($category as $cates)
                    <div class="col-md-3 mb-3">
                        <a href="{{url('viewCategories/'.$cates->slug)}}">
                            <div class="card">
                                 <img src="{{url('uploads/category/'.$cates->image)}}" class="dells" alt="category product">
                                <div class="card-body">
                                <h5>{{$cates->categoryname}}</h5>
                                <p>
                                {{$cates->description}}
                                </p>
                                </div>
                            </div>
                        </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection