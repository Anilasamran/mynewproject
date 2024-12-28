
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

<div class="card" style="margin:10px;padding:10px;background:#efefef;">
    <div class="card-header"><h3 class="edit">Edit Product</h3>
    <a href="{{ url('products')}}" class="btn btn-danger float-end">BAck</a></div>
    <div class="card-body">
    <form action="{{url ('products/' . $products->id) }}"

    method="post" enctype="multipart/form-data">

     @csrf
     @method("PATCH")
   
    <form name="my form" class="form-group">
    <input type="hidden" class="form-control" name="id" id="name" value="{{$products->id}}">

        <label for="inputname">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$products->name}}"><br><br>

        <label for="inputname">price:</label>
        <input type="text" class="form-control" name="price" id="price" value="{{$products->price}}"><br><br>
        <label for="inputname">discount_price:</label>
        <input type="text" class="form-control" name="discount_price" id="discount_price" value="{{$products->discount_price}}"><br><br>
        <label for="inputname">color:</label>
        <input type="text" class="form-control" name="color" id="color" value="{{$products->color}}"><br><br>
        <label for="inputname">Quantity:</label>
        <input type="text" class="form-control" name="quantity" id="quantity" value="{{$products->quantity}}"><br><br>
        <label for="inputname">Sale_qty:</label>
        <input type="text" class="form-control" name="sale_qty" id="sale_qty" value="{{$products->sale_qty}}"><br><br>
        <label for="inputname">Remain_qty:</label>
        <input type="text" class="form-control" name="remain_qty" id="remain_qty" value="{{$products->remain_qty}}"><br><br>
        <label for="inputname">category:</label>
        <input type="text" class="form-control" name="category" id="category" value="{{$products->category}}"><br><br>
        <label for="inputname">gallery:</label>
        <input type="file" class="form-control" name="gallery" id="gallery" value="{{$products->gallery}}"><br><br>
        <label for="inputname">description:</label>
       
        <input type="text" class="form-control" name="description" id="description" value="{{$products->description}}"><br><br>

        <label for="checkbox">New:</label>
        <input type="checkbox" id="new" name="new" {{ old('new', $products->new ?? false) ? 'checked' : '' }}>

        <button type="submit" class="btn btn-primary" value="update">Update</button>
       
        
        
    </form>

</div>


    </div>
</div>
@endsection