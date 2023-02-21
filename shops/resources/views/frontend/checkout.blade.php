@extends('layouts.front')

@section('title')
checkout
@endsection
@section('content')
<div class="container mt-5">
    <form action="{{url('place-order')}}" method="POST">
        @csrf
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6>Basic details</h6>
                    <hr>
                     <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">firstname</label>
                            <input type="text" name="firstname" class="form-control">
                            <span class="text-danger" name="firstname"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">Last name</label>
                            <input type="text" name="lastname" class="form-control">
                            <span class="text-danger" name="lastname"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                            <span class="text-danger" name="email"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">Phone</label>
                            <input type="text" name="phonenumber" class="form-control">
                            <span class="text-danger" name="phonenumber"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">Adddres1</label>
                            <input type="text" name="address1" class="form-control">
                            <span class="text-danger" name="address1"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">Adddres2</label>
                            <input type="text" name="address1" class="form-control">
                            <span class="text-danger" name="address2"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">City</label>
                            <input type="text" name="city" class="form-control">
                            <span class="text-danger" name="city"></span>
                       </div>
                       <div class="col-md-6">
                            <label for="">State</label>
                            <input type="text" name="state" class="form-control">
                            <span class="text-danger" name="state"></span>
                       </div>
                       <div class="col-md-6">
                           <label for="">Country</label>
                            <input type="text" name="country" class="form-control">
                            <span class="text-danger" name="country"></span>
                       </div>
                       <div class="col-md-6">
                           <label for="">Pincode</label>
                            <input type="text" name="pincode" class="form-control">
                            <span class="text-danger" name="pincode"></span>
                       </div>
                     </div>
                </div>
            </div>
        </div>



        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                @php
               $total=0;
            @endphp
                    <h6>Order Details</h6>
                    <hr>
                    @if($cartItems->count() > 0)
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>product name</th>
                                <th>product quantity</th>
                                <th>selling price</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($cartItems as $items)

                    <tr>
                        <td>{{$items->product->product_name}}</td>
                        <td>{{$items->prod_qty}}</td>
                        <td>{{$items->product->selling_price}}</td>
                    </tr>
                    @php
                        $total += $items->product->selling_price * $items->prod_qty;
                   @endphp
                    @endforeach
                        </tbody>
                    </table>
                    <h6>Grand Total:
                        <span class="float-end">Tsh {{$total}}</span></h6>
                    <span>
                        <input type="hidden" name="payment_mode" value="COD">
                       <button type="submit" class="form-control btn btn-success btn-sm float-end">place Order | COD</button>
                       <button type="button" class="btn btn-primary w-100 mt-3 btn-sm razorpay_btn">Pay with Razirpay</button>
                    </span>
                </div>
                @else
                <div class="card-body text-center">
                    <h4>No products in Cart</h4>
                </div>
                @endif
            </div>
        </div>
    </div>
 </form>
</div>


@endsection
