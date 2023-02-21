@extends('layouts.master')
@section('title')
'Orders'
@endsection

@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Completed Orders
                        <a href="{{url('orders')}}" class="btn btn-success float-end">New Orders</a>
                    </h4>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
               <thead>
                <tr>
                    <th>Order date</th>
                    <th>Tracking Number</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
               </thead>
               <tbody>
                @foreach($ordas as $items)
                <tr>
                     <td>{{date('d-m-Y',strtotime($items->created_at))}}</td>
                    <td>{{$items->tracking_no}}</td>
                    <td> Ths: {{$items->total_price}} /=</td>
                    <td>{{$items->status=='0' ? 'Pending':'Completed'}}</td>
                    <td><a href="{{url('admin/view-orders/'.$items->id)}}" class="btn btn-primary btn-sm">view</a></td>
                </tr>
                @endforeach
               </tbody>
            </table>
                </div>
            </div>
            </div>
        </div>
     </div>

@endsection