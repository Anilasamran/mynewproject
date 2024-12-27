@extends('layout')
@section('content')

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        body,
        html {
            width: 100%;
            height: 100%;
        }
        
      
  nav{
    background:#242526;
    width:100%;
    z-index:999;
    height:65px;
    line-height:65px;
position:relative;
margin-top:0px;
  }
 nav .wrapper{
    position:relative;
    padding:0 30px;
    margin:auto;
    display:flex;
align-items:center;
justify-content:space-between;
max-width:1250px;
    
 }
 .wrapper .logo a{
    color:#f2f2f2;
    text-decoration:none;
    font-size:27px;
    font-weight:600;
    line-height:45px;
 }
  .wrapper .nav-links{
  display:inline-flex;}

 .nav-links li{
    list-style:none;
 }
 .nav-links li a{
    color:#fff;
    text-decoration:none;
    font-size:18px;
    font-weight:500;
    padding:9px 15px;
    border-radius:5px;
    transition:all 0.3s ease;
 }
 .nav-links li a:hover{
    background:#3a3b3c;
 }
.nav-links .drop-menu{
    background:#242526;
width:180px;
top:85px;
line-height:45px;
position:absolute;
opacity:0;
visibility:hidden;
}
.nav-links li:hover .drop-menu,
.nav-links li:hover .mega-box{
    opacity:1;
visibility:visible;
top:65px;
transition:all 1s ease;
}
.drop-menu li a{
    width:100%;
    display:block;
    padding:0 0 0 15px;
    font-weight:400;
    border-radius:3px;
}
.mega-box{
    position:absolute;
    top:85px;
    background:#242526;
    width:100%;
    left:0;
    opacity:0;
    visibility:hidden;
    
}
.mega-box .content{
    background:#242526;
    padding:25px 20px;
    display:flex;
    width:100%;
    justify-content:space-between;
}
.content .row{
    width:calc(25% - 30px);
    line-height:45px;
}
.content .row header{
    color:#f2f2f2;
    font-size:20px;
    font-weight:500;
}
.content .row .mega-links{
    border-left:1px solid rgba(255,255,255,0.09);
    margin-left:-40px;
}
.content .row:nth-child(1),
.content .row:nth-child(2){
    border-left:0px;
}
.row .mega-links li{
    padding:0 20px;
}
.row .mega-links li a{
    padding:0 20px;
    color:#d9d9d9;
    font-size:17px;
    display:block;
}

.container-fluid {
            padding-top: 75px;
        }


        .carousel-inner {
            height: 550px;
            width: auto;
            object-fit: contain;
        }

        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background-color: black;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        .carousel-control-prev {
            left: 5%;
        }

        .carousel-control-next {
            right: 5%;
        }

        .carousel-inner h4,
        .carousel-inner p {
            color:#c98c22;
            left:-40%;
           position:relative;
        top:-70px;
    
        
        }

    
    .cart-count{

        color:white;
        border-radius:50%;
        font-size:10px;
        position:absolute;
        background:red;
        width:18px;
        height:18px;
        top:5px;
        text-align:center;
        line-height:18px;
    }
    .btn{
        position:relative;
        top:40px;
        text-align:center;
        justify-content:center;
        margin-left:30%;}
        .blue{
            background:#ec9822;
            border-radius:5px;
            color:white;
            font-weight:bold;

        }
 
        .shop_section {
    padding: 60px 0;
    font-family: Arial, sans-serif;
}

.heading_container h2 {
    margin-bottom: 40px;
    color: #333;
    font-weight: 700;
    font-size: 2em;
    text-align: center;
}

.box {
    background: none; 
    
    overflow: hidden;
    position: relative;
    height: 460px; 
   
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-bottom: 30px;
    transition: transform 0.5s ease, box-shadow 0.5s ease; 
}

.box:hover {
    transform: scale(1.05); 
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15); 
}

.img-box img {
    width: 100%;
    height: 250px; 
    object-fit: cover; 
}

.detail-box {
    padding: 15px;
    text-align: center;
    color: #333;
}

.detail-box h6 {
    margin: 10px 0;
    font-size: 1.1em;
    font-weight: 600;
}

.text-muted {
    font-size: 0.7em;
    color: grey;
}

.text-danger {
    font-size: 0.7em;
    color: #d9534f;
}

.new {
    position: absolute;
    top: 15px;
    left: 15px;
    background: #28a745;
    color: white;
    padding: 4px 8px;
    font-size: 0.85em;
    font-weight: bold;
    border-radius: 4px;
}

.add-cart-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 15px;
    text-align: center;
    background: #f8f9fa; 
    border-top: 1px solid #ddd; 
    opacity: 0; 
    transition: opacity 0.4s ease; 
}

.box:hover .add-cart-overlay {
    opacity: 1; 
}

.add-cart-overlay {
    display:flex;
    flex-direction:inline;
    align-items: center; 
    justify-content:center;}

.btn-cart {
    width: auto;
    background-color:#ec9822;
    color: white;
    border: none;
    padding:  10px ;
    border-radius: 4px;
    cursor: pointer;
    font-weight:bold;
 
   align-items:center;
    transition: background-color 0.3s ease;
    
    margin-top:5px;
}


.btn {
    width: 10%;
    background-color: #ec9822;
    color: white;
    border: none;
    padding:  10px ;
    border-radius: 4px;
    cursor: pointer;
    font-weight:bold;
 
   align-items:center;
    transition: background-color 0.3s ease;
    top:10px;
} 

.btn:hover {
    background-color: #d37416;
}

a {
    text-decoration: none; 
    color: inherit; 
}
.img{
    
    position:relative;
    transition: transform 2s ;
   
}
.img :hover{
    opacity:1;
    transition:  transform 2s ;
    transform: rotate(360deg); 
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
    
}
.details{
    text-align:center;
    justify-content:center;
    font-weight:bold;
    background:#fff;

      align-items:center;
      margin:50px;
}

.details:hover{
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.40);
    transition:all 3s ease;
    background: #85adad;
    color:white;
    transform:translateY(-50%);
    
}


    </style>
    
 
    <div class="container-fluid mt-5 pt-3">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('bg2.jpg') }}" alt="Realme phone model 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Realme</h4>
                        <p>Main camera: 1/1.4" | 2.24µm 16-in-1 Super Pixels | 7P lens with ALD | f/1.65</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('bg1.jpg') }}" alt="Realme phone model 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Realme</h4>
                        <p>Main camera: 1/1.4" | 2.24µm 16-in-1 Super Pixels | 7P lens with ALD | f/1.65</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('spark.webp') }}" alt="TECNO phone model 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>TECNO</h4>
                        <p>Main camera: 1/1.4" | 2.24µm 16-in-1 Super Pixels | 7P lens with ALD | f/1.65</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('spark2.webp') }}" alt="TECNO phone model 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>TECNO</h4>
                        <p>Main camera: 1/1.4" | 2.24µm 16-in-1 Super Pixels | 7P lens with ALD | f/1.65</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

   
 <section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Trending Products</h2> 
        </div>

        <div class="row" id="product-list">
            @foreach($products as $products)
            <div class="col-sm-4 col-md-6 col-lg-4">
                <div class="box">
                    <a href="{{ route('productdetails', ['id' => $products->id]) }}" title="View">
                        <div class="img-box">
                        <img src="{{ asset($products->gallery) }}" class="img-fluid" style="width:auto; height:350px;" alt="{{ $products->name }}">
                            <div class="detail-box">
                                <h6>{{ $products->name }}</h6>
                    
                                <h5 class="text-muted" style="text-decoration:{{$products->discount_price ? 'line-through' : 'none'}};color:grey;">
                 price : ${{ $products->price }}</h5>
                 <h6 class="text-danger" style="text-decoration:{{$products->discount_price ? '' : 'display:none;'}};">
                    discount_price:${{$products->discount_price}}</h6>
            
                            </div>
              
                            @if($products->new)
          <span class="new">New</span>
            @endif</div>
                        
                    </a>
                   <div class="add-cart-overlay justify-content-center"> <form action="{{url('addcart')}}" method="post">
                @csrf
                <input type="number" value="1" min="1" class="form-control" name="purchasequantity" style="width:100px;">
                <button type="submit" class="btn-cart">Add Cart</button>
                <input type="hidden"  name="product_id" value="{{ $products->id }}">

</form> </div>

                   
                </div>
    </div>
    @endforeach
        </div>
        
        <div class="text-center mt-4">
            <button id="load-more" class="btn btn-primary">Load More</button>
        </div>
    
    </div>
</section>
<div class="container mt-3 mb-5">
    <div class="row">
    @foreach($description as $descriptive)
        <div class="col-md-6">
            <div class="img">
        <img src="{{ asset($descriptive->image) }}" class="img-fluid" style="width:auto; height:350px;" alt="{{ $descriptive->name }}">
</div>
    </div>
        <div class="col-md-5">
            <div class="details">
        <h1>{{ $descriptive->product_name }}</h1>
        <h4>{{ $descriptive->description }}</h4></div>
        </div>
        @endforeach
    </div>
</div>


<script>
    var page = 1;
    $("#load-more").click(function(){
     $.ajax({
        type: "GET",
        url: "{{url ('partialproducts')}}",
        data: {page: ++page},
        dataType: "html",
        success : function(response){
             if(response.trim() === ""){
                $("#load-more").hide();   
             }
             else{
                $("#product-list").append(response);
             }
        },
        error:function(){
 alert("sorry!something went wrong.try again");
        },
         });
    });
</script>

@endsection
