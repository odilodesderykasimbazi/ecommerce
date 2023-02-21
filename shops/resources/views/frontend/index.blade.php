@extends('layouts.front')

@section('title')
OnlineShop
@endsection
@section('content')
@include('layouts.inc.slider')
 <div class="py-3">
    <div class="container">
        <h4>featured products</h4>
        <div class="row">
            <div class="owl-carousel featured-carousel owl-theme">
               @foreach($featured_product as $prod)
                <div class="item">
                    <div class="card">
                      <img src="{{url('uploads/products/'.$prod->image)}}" class="dell"alt="Product image">
                        <div class="card-body">
                              <h5>{{$prod->product_name}}</h5>
                                <span class="float-start">{{$prod->selling_price}} Ths</span>
                                <span class="float-end"> <s>{{$prod->original_price}} Ths</s></span>
                       </div>
                    </div>
                 </div>
               @endforeach
           </div>
        </div>
    </div>
 </div>

 <div class="py-5">
    <div class="container">
        <h4>Trending Categories</h4>
        <div class="row">
            <div class="owl-carousel featured-carousel owl-theme">
               @foreach($categories as $cats)
                <div class="item">
                    <a href="{{url('viewCategories/'.$cats->slug)}}">
                    <div class="card">
                      <img src="{{url('uploads/category/'.$cats->image)}}" class="dell"alt="categoryimage">
                        <div class="card-body">
                              <h5>{{$cats->categoryname}}</h5>
                              <p>{{$cats->description}}</p>
                                
                       </div>
                    </div>
                    </a>
                 </div>
               @endforeach
           </div>
        </div>
    </div>
 </div>
@endsection


@section('scripts')
<script>
$('.featured-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
})
</script>

@endsection