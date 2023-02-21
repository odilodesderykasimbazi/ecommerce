@extends('layouts.front')

@section('title','myOrders')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Order View
                        <a href="{{url('my-orders')}}" class="btn btn-success float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Shipping Details</h4>
                        <hr>
                             <label for="firstname">First name</label>
                             <div class="border p-2">{{$orda->fname}}</div>
                             <label for="last name">Last name</label>
                             <div class="border p-2">{{$orda->lname}}</div>
                             <label for="email">Email</label>
                             <div class="border p-2">{{$orda->email}}</div>
                             <label for="Contact">Contact No</label>
                             <div class="border p-2">{{$orda->phone }}</div>
                             <label for="">Shipping Address</label>
                             <div class="border p-2">
                                Address1:   {{$orda->address1}},<br>
                                 Address2:  {{$orda->address2}},<br>
                                City:   {{$orda->city}},<br>
                                Country:   {{$orda->country}}
                             </div>
                             <label for="">Zip Code</label>
                             <div class="border p-2">{{$orda->pincode}}</div>
                        </div>
                            <div class="col-md-6">
                               <h4>Order Details</h4> 
                                 <hr>
                                    <table class="table table-bordered">
                                       <thead>
                                              <tr>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                             </tr>
                                        </thead>
                                      <tbody>
                                           @foreach($orda->orderitems as $item)
                                         <tr>
                                              <td>{{$item->products->product_name}}</td>
                                             <td>{{$item->quantity}}</td>

                                            <td>{{$item->price}}</td>
                                             <td>
                                               <img src="{{asset('uploads/products/'.$item->products->image)}}" alt="prod image" width="50px" height="50px">
                                              </td>
                                          </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
                                         <hr>
                                             <h4 class="px-2">Total Price: <span class="float-end">Tsh:{{$orda->total_price}}</span></h4>
                            </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection