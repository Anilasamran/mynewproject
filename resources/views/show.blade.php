
@extends('template')
@section('content')

<div class="main-content">
    <div class="header-wrapper">
        <div class="header-title">
            <span>Primary</span>
            <h2>PRODUCTS</h2>
        </div>
        <div class="user-info">
            <div class="search-box">
            <i class="fa solid fa-search"></i>
            <input type="text" placeholder="search"/></div><img src="{{asset('assets/images/profile2.webp')}}">
        </div>
</div>
<div class="card" style="margin:20px;margin-left:180px;background:#efefef">
                <div class="card-header">
                   <h3 class="yell"> View Product</h3>
                </div>
                <div class="card-body">
                    <div class="card-body">
                    <p class="card-text">
    <img src="{{ asset($products->gallery) }}" alt="Product Image" style="max-width: 30%; height: auto;">
</p>
                        <h5 class="card-title">Name : {{$products->name}}</h5>
                        <p class="card-text">Price : {{$products->price}}</p>
                        <p class="card-text">discount_Price : {{$products->discount_price}}</p>
                        <p class="card-text">color : {{$products->color}}</p>
                        <p class="card-text">quantity : {{$products->quantity}}</p>
                        <p class="card-text">sale_qty : {{$products->sale_qty}}</p>
                        <p class="card-text">remain_qty : {{$products->remain_qty}}</p>
                        <p class="card-text">Category : {{$products->category}}</p>
                        



                        <p class="card-text">Description : {{$products->description}}</p>
                    </div>

                    <hr> <a class= "btn btn-success" href="{{url('/products')}}">BAck</a>
                </div>
</div>
@endsection