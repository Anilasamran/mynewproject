<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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





</style>

</head>
<body>


  <nav>
    <div class="wrapper">
        <div class="logo"><a href="#">Xiaomi Pakistan</a></div>
        <ul class="nav-links">
            <li><a href="/productslider">Home</a></li>
            <li><a href="#">Smart Phone</a>
         
            <ul class="drop-menu">
<!--         
                <li> <a href="">Product Detail</a></li>
         -->

               
                <li><a href="#">menu 3</a></li>
                <li><a href="#">menu 4</a></li>
               
            </ul>
            
            
        </li>
            <li><a href="#">Wearable</a>
            <div class="mega-box">
                <div class="content">
                <div class="row">
                        <header>Design factory</header>
                        <ul class="mega-links">
                            <li><a href="#">Graphics</a></li>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Factories</a></li>
                            <li><a href="#">Customs</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <header>Services</header>
                        <ul class="mega-links">
                            <li><a href="#">Graphics</a></li>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Cards</a></li>
                            <li><a href="#">home items</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        <header>Security Services</header>
                        <ul class="mega-links">
                            <li><a href="#">Graphics</a></li>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Factories</a></li>
                            <li><a href="#">home items</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>

        <li><a href="{{url('/viewcart')}}"><i class="fa-solid fa-cart-shopping"></i>
        @if(session()->has('cartCount') && session('cartCount') > 0)
<span class="cart-count">{{session('cartCount')}}</span>
@endif
    </a>
    
</li>

 <li><a href="{{ url('search') }}"><i class="fa-solid fa-magnifying-glass"></i>
 
</a></li>

        </ul>

</div>
    
</nav>


