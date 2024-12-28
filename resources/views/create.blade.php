
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
<div class="card" style="margin:20px;background:#efefef;">
    <div class="card-header "><h3 class="cre">Create Product</h3></div>
    <div class="card-body">
    <form action="{{url ('products') }}"

    method="post" enctype="multipart/form-data">

     @csrf
   
    <form name="my form" class="form-group">
        <label for="inputname">Name:</label>
        <input type="text" class="form-control" name="name" id="name" required><br><br>

        <label for="inputname">Price:</label>
        <input type="text" class="form-control" name="price" id="price" required><br><br>
        <label for="inputname">discount_Price:</label>
        <input type="text" class="form-control" name="discount_price" id="discount_price" required><br><br>
        <label for="inputname">Color:</label>
        <input type="text" class="form-control" name="color" id="color" required><br><br>
        <label for="inputname">Quantity:</label>
        <input type="text" class="form-control" name="quantity" id="quantity" required><br><br>
        <label for="inputname">sale_qty:</label>
        <input type="text" class="form-control" name="sale_qty" id="sale_qty" required><br><br>
        <label for="inputname">remain_qty:</label>
        <input type="text" class="form-control" name="remain_qty" id="remian_qty" required><br><br>
        <label for="inputnew">new:</label>
        <input type="checkbox" name="new" id="new" ><br><br>
        <label for="inputname">Category:</label>
        <input type="text" class="form-control" name="category" id="category" required><br><br>
        <label for="inputname">Gallery:</label>
        <input type="file" class="form-control" name="gallery" id="gallery" required><br><br>
        <label for="inputname">Description:</label>
        <input type="text" class="form-control" name="description" id="description" required><br><br>
        
        <button type="submit" class="btn btn-dark">Submit</button>
        <a class="btn btn-primary" href="{{url('/products')}}">Cancel</a>

    </form>

</div>


    </div>

@endsection