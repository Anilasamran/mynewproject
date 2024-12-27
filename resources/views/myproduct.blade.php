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
                <form action="{{url('/products')}}" method="GET" class="search-box">
            <i class="fa solid fa-search"></i>
            <input type="text" name="search" placeholder="search" value="{{request('search')}}"/></div>
</form>
<img src="{{asset('assets/images/profile2.webp')}}">
        </div>
</div>
 <div class="container">
    <div class="row">
        <div class="col-10" style="padding:20px;">
        @if (session('flash_message'))
                <div class="alert alert-success">
                    {{ session('flash_message') }}
                </div>
            @endif
           <div class="card">
                <div class="card-header">
                    Laravel 9 and Image Upload | File Submit
                </div>
                <div class="card-body">
                    <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New"> Add New</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-stiped  table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>discount_Price</th>
                                    <th>Color</th>
                                    <th>Quantity</th>
                                    <th>Sale_qty</th>
                                    <th>Remain_qty</th>
                                    <th>Category</th>
                                    <th>Gallery</th>
                                    <th>Description</th>
                                    <th>New</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->discount_price }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->sale_qty }}</td>
                                        <td>{{ $item->remain_qty }}</td>
                                        <td>{{$item->category}}</td> 
                                
                                        <td><img src="{{ asset($item->gallery) }}" width="50" height="50" border-radius="50%" class="img img-responsive"></td>
                         <td>{{ $item->description}}</td>
                         <td>{{$item->new ? 'Yes' : 'No'}}</td> 
                                        <td>
                      <a href="{{ url('/products/' . $item->id) }}" title="View" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                      <a href="{{ url('/products/' . $item->id . '/edit') }}" title="Edit" class="btn btn-dark"><i class="fa-solid fa-pen"></i></a>
     <form method="post" action="{{ url('/products/' . $item->id . '/') }}" accept-charset="UTF-8" style="display:inline">
                       {{method_field('DELETE')}}
                       {{csrf_field()}}
                     <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Confirm delete?')"><i class="fa-solid fa-trash"></i></a>
</form>
                                </td>
                                
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                    </div>
                </div>
           </div>
        </div>
    </div>
</div> 
<div class="pagination">
{{ $products->links('pagination::bootstrap-5') }}
</div>
  
@endsection 
