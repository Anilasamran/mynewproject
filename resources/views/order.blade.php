
 
    @extends('layout')
@section('content')
  
            <h2 style="text-align:center;">Order</h2>
        
       

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
                    <a href="{{ url('/orders/create') }}" class="btn btn-success btn-sm" title="Order No:"> add no:</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-stiped  table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product_id</th>
                                    <th>user_id</th>
                                    <th>purchase_qty</th>
                                    <th>sale_qty</th>
                                    
                                    <th>remain_qty</th>    
                                    <th>action</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach($order as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_id}}</td>
                                        <td>{{ $item->user_id}}</td>
                                        <td>{{ $item->purchasequantity}}</td>
                                        <td>{{ $item->sale_qty}}</td>
                                
                                        <td>{{ $item->remain_qty}}</td>
                                        
                                
        
                         
                                        <td>
                      <a href="{{ url('/orders/' . $item->id) }}" title="View" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                      <a href="{{ url('/orders/' . $item->id . '/edit') }}" title="Edit" class="btn btn-dark"><i class="fa-solid fa-pen"></i></a>
     <form method="post" action="{{ url('/orders/' . $item->id . '/') }}" accept-charset="UTF-8" style="display:inline">
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

  
@endsection 

