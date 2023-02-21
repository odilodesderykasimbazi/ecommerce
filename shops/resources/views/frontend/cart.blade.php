@extends('layouts.front')

@section('title','my cart')

@section('content')
    <div class="container my-5">
      <div class="card shadow">
        @if($cartItems->count() > 0)
        <div class="card-body">
            @php 
               $total=0;
            @endphp
            @foreach($cartItems as $item)
             <div class="row product_data">
                  <div class="col-md-2 my-auto">
                    <img src="{{url('uploads/products/'.$item->product->image)}}" height="50px" width="50px" alt="image here">
                  </div>
                 <div class="col-md-3 my-auto">
                     <h6>{{$item->product->product_name}}</h6>
                 </div>
                 <div class="col-md-2 my-auto">
                     <h6>Tsh: {{$item->product->selling_price}}</h6>
                 </div>
                 <div class="col-md-3 my-auto">
                      <input type="hidden" class="product_id" value="{{$item->prod_id}}">
                      @if($item->product->quantity >= $item->prod_qty)
                        <label for="quantity">Quantity</label>
                          <div class="input-group text-center mb-3" style="width:130px;">
                             <button class="input-group-text changeQuantity decrement-btn">-</button>
                              <input type="text" name="quantity"  class="form-control input_qty text-center" value="{{$item->prod_qty}}">
                       <button class="input-group-text changeQuantity increment-btn">+</button>
                   </div>
                   @php $total += $item->product->selling_price * $item->prod_qty; @endphp
                   @else 
                   <h6>out of stock</h6>
                @endif
               </div>
                     <div class="col-md-2 my-auto">
                        <button class="btn btn-danger delete_cart_item">  <i class="fa fa-trash"></i>remove</button>
                  </div>
               </div>
               @endforeach
            </div>

            <div class="card-footer">
                <h6>Total Price: Ths {{$total}}
                <a href="{{url('checkout')}}" class="btn btn-success btn-sm float-end">Checkout</a>
                </h6> 
            </div>
            @else
            <div class="card-body text-center">
              <h2>your <i class="fa fa-shopping-cart"></i>Cart is empty</h2>
              <a href="{{url('featuredProduct')}}" class="btn btn-outline-primary float-end">Continue Shopping</a>
            </div>
            @endif
           
     </div>
</div>
@endsection  