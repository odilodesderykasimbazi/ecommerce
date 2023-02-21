@extends('layouts.front')

@section('title','my wishlist')

@section('content')
    <div class="container my-5">
      <div class="card shadow">
       <div class="card-body">
        @if($wish->count() > 0)
            @foreach($wish as $item)
             <div class="row product_data">
                  <div class="col-md-2 my-auto">
                    <img src="{{url('uploads/products/'.$item->product->image)}}" height="50px" width="50px" alt="image here">
                  </div>
                 <div class="col-md-2 my-auto">
                     <h6>{{$item->product->product_name}}</h6>
                 </div>
                 <div class="col-md-2 my-auto">
                      <input type="hidden" class="prod_id" value="{{$item->prod_id}}">
                      @if($item->product->quantity >= $item->prod_qty)
                       <h6>instock</h6> 
                       <div class="input-group text-center mb-3">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity " value="1" class="form-control input_qty text-center" />
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                   @else 
                   <h6>out of stock</h6>
                @endif
               </div>
               <div class="col-md-2 my-auto">
                        <button type="submit" class="btn btn-success addToCart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                  </div>
                     <div class="col-md-2 my-auto">
                        <button class="btn btn-danger delete_wish_item">  <i class="fa fa-trash"></i>remove</button>
                  </div>
               </div>
               @endforeach
            </div>
          @else
              <h5>There is no product in wishlist</h5>
        @endif
       </div>
     </div>
</div>
@endsection  