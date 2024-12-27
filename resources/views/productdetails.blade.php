
@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css"
        integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body, html {
            width: 100%;
            height: 100%;
           
        }

        .container {
            width: 80%;
            margin: 50px auto;
            
            padding: 40px;
           
        }
        .heading {
            text-align: center;
            font-size: 30px;
            color: black;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .img-container {
            width: 50%;
            margin-right: 40px;
        }

        .img-container img {
            width: 40%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .details-container {
            width: 45%;
            margin-top: 40px;
            background-color: #f8f9fa;
        }

        .details-container h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .product-info p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .product-info .text-muted{
        
            font-size: 15px;
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #c98c22;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
            transition: 0.3s ease;
        }

        .btn:hover {
            background-color: #b0781a;
        }

        @media (max-width: 768px) {
            .img-container, .details-container {
                width: 100%;
                margin-right: 0;
            }

            .img-container {
                margin-bottom: 30px;
            }
        }
       
    </style>
</head>
<body>
    <div class="container">
    <div class="heading">Product Details</div>
        <div class="row">
            
            <div class="col-md-5">
                <img src="{{ asset($products->gallery) }}" alt="{{ $products->name }}" class="img-fluid">
              
              
           
            </div>

            
            <div class="col-md-6" style=" background-color: #f8f9fa;">
                <h4>{{ $products->name }}</h4>
                <div class="product-info">
                <p class="text-muted"><strong>price:</strong> ${{ number_format($products->price, 2) }}</p>
                <p class="text-danger"><strong>discount_price:</strong> ${{ number_format($products->discount_price, 2) }}</p>
                    <p>{{ $products->description }}</p>
                    <p><strong>Category:</strong> {{ $products->category }}</p>
                    <p><strong>Color:</strong> {{ $products->color }}</p>
                    
                    <p><strong>Total quantity:</strong> {{ $products->quantity }}</p>
          
          <p class="text-muted">available stock:{{$products->remain_qty}}</p>
          <p class="text-success">sold out:{{$products->sale_qty}}</p>
                </div>
         

                <a href="{{ url()->previous() }}" class="btn">Go Back</a>
            
            </div>
            

        </div>
    </div>
</body>
</html>

@endsection



