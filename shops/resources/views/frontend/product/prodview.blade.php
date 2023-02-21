@extends('layouts.front')

@section('title',$produc->product_name)

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{$produc->categorys->categoryname}} / {{$produc->product_name}} 
        </h6>
    </div>
</div>
<div class="container">
    <div class="card shadow product_data" >
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{url('uploads/products/'.$produc->image)}}" class="w-50" alt="product image">
                </div>
                <div class="col-md-8">
                    <h2 clas="mb-0">{{$produc->product_name}}
                        @if($produc->trending=='1')
                    <label style="font-size:16px" class="float-end badge bg-danger trending_tag"> Trending</label>
                     @endif
                </h2>
                    <hr>
                    <label class="me-3">Original price:<s>Ths{{$produc->original_price}}</s></label>
                    <label class="fw-bold">Selling Price: Tsh {{$produc->selling_price}}</label>
                    <p class="mt-3">
                       {!!$produc->small_description!!}
                    </p>
                    <hr>
                    @if($produc->quantity > 0)
                     <label class="badge bg-success">In Stock</label>
                     @else
                     <label class="badge bg-danger">Out of stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <input type="hidden" value="{{$produc->id}}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity " value="1" class="form-control input_qty text-center" />
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10"><br>
                        @if($produc->quantity > 0)
                        <button type="submit" class="btn btn-primary me-3 addToCart float-start">Add to cart <i class="fa fa-shopping-cart"></i></button> 
                      @endif
                        <button type="submit" class="btn btn-success me-3 addToWishlist float-start">Add to wishlist <i class="fa fa-heart"></i></button> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12"> <hr>
               <h3>Description</h3>
               <p>
                {!!$produc->description!!}
               </p>
            </div>
        </div>
    </div>
</div>
@endsection
