@extends('layouts.master')
@section('title')
'Orders'
@endsection

@section('content')

<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Order View
                    <a href="{{url('orders')}} "  class="btn btn-warning float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Shipping Details</h4>
                        <hr>
                             <label for="firstname">First name</label>
                             <div class="border p-2">{{$orders->fname}}</div>
                             <label for="last name">Last name</label>
                             <div class="border p-2">{{$orders->lname}}</div>
                             <label for="email">Email</label>
                             <div class="border p-2">{{$orders->email}}</div>
                             <label for="Contact">Contact No</label>
                             <div class="border p-2">{{$orders->phone }}</div>
                             <label for="">Shipping Address</label>
                             <div class="border p-2">
                                Address1:   {{$orders->address1}},<br>
                                 Address2:  {{$orders->address2}},<br>
                                City:   {{$orders->city}},<br>
                                Country:   {{$orders->country}}
                             </div>
                             <label for="">Zip Code</label>
                             <div class="border p-2">{{$orders->pincode}}</div>
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
                                           @foreach($orders->orderitems as $item)
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
                                             <h4 class="px-2">Total Price: <span class="float-end">Tsh:{{$orders->total_price}}</span></h4>
                                             <div class="mt-3 px-2">
                                             <label for="">Order status</label>
                                             <form action="{{url('update-order/'.$orders->id)}}" method="POST">
                                                @method('PUT')
                                                @csrf
                                             <select class="form-select" name="order-status">
                                                <option {{$orders->status=='0'?'selected':''}} value="0">Pending</option>
                                                <option {{$orders->status=='1'?'selected':''}} value="1">Complited</option>
                                             </select>
                                             <button type="submit" class="btn btn-primary btn-sm mt-2 float-end">Update</button>
                                             </form>
                                             </div>
                            </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection