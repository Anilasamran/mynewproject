@extends('layout')
@section('content')
<div class="card" style="margin:20px;background:#efefef;">
    <div class="card-header "><h3 class="cre">Create Order</h3></div>
    <div class="card-body">
    <form action="{{url ('orders') }}"

    method="post" enctype="multipart/form-data">
        @csrf
   
                
    <div class="form-group">
    <label for="inputname">Product_id:</label>
    <input type="text" class="form-control" name="product_id" id="product_id" required><br><br>
        <label for="inputname">user_id:</label>
        <input type="text" class="form-control" name="user_id" id="user_id" required><br><br>
        <label for="inputname">purchasequantity:</label>
        <input type="text" class="form-control" name="purchasequantity" id="purchasequantity" required><br><br>
        <label for="inputname">sale_qty:</label>
        <input type="text" class="form-control" name="sale_qty" id="sale_qty" required><br><br>
        <label for="inputname">remain_qty:</label>
        <input type="text" class="form-control" name="remain_qty" id="remain_qty" required><br><br>
        
       
        <button type="submit" class="btn btn-dark">Submit</button>
        <a class="btn btn-primary" href="{{url('/orders')}}">Cancel</a>

    </form>

</div>
@endsection
