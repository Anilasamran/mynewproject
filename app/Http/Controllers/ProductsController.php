<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Users2;
use App\Models\Cart;
use App\Models\Orders;
use App\Models\Descriptions;
use App\Models\Colors;







class ProductsController extends controller
{
    /**
    

     *
     * @return \Illuminate\Http\Response
     */
    public function index(REquest $request)
    {
        $searchTerm = $request->input('search');
        $products = products::when($searchTerm, function($query, $searchTerm){
            return $query->where('name', 'lIKE','%' .$searchTerm. '%' )->
            orwhere('description', 'lIKE','%' .$searchTerm. '%' ); })->paginate(3);

             
          
             return view('myproduct',compact('products'));

        
    
    }
    public function head()
    {

             $products = Products::all();
          
             return view('header',compact('products'));

        
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            return view('create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $requestData = $request->all();
        $requestData['new'] = $request->has('new') ? true : false;
        
        
            $fileName = time(). $request->file('gallery')->getClientOriginalName();
            $path = $request->file('gallery')->storeAs('images', $fileName, 'public');
            $requestData["gallery"] = '/storage/' . $path;
        
    
        products::create($requestData);
        
        return redirect('products')->with('flash_message', 'Product Addedd!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Products::find($id);
        return view('show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::find($id);
        return view('edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $input = $request->except('gallery');
        $input['new'] = $request->has('new') ? true : false;
                if($request->hasFile('gallery')) {
            $filename = time() . '_' . $request->file('gallery')->getClientOriginalName();
            $Path = $request->file('gallery')->storeAs('images', $filename ,'public');
            $input['gallery'] = '/storage/' .$Path;
                }
            $product->update($input);
            return redirect('products')->with('flash_message','product updated successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('products')->with('flash_message', 'Product deleted!');


    }

    public function productslider(Request $request)
{
    $products = Products::paginate(3);
    $description = Descriptions::all();
    return view('productslider',compact('products','description'));
}
   
   
public function partialproducts(Request $request)
{
    $products = Products::paginate(3);
    $page = $request->input('page', 1); 
    $products = Products::paginate(3, ['*'], 'page', $page); 
    if($products->isEmpty()){
    return response("");
    }


    
        return view('partialproducts', compact('products'))->render();
    }






    public function productdetails($id)
{
    $products = Products::find($id);

    
    if (!$products) {
        abort(404, 'Product not found');
    }

    
    return view('productdetails', compact('products'));
}
public function search(Request $request)
{
    $searchTerm = $request->input('search'); 

    
    $products = Products::where('name','LIKE','%' . $searchTerm . '%')->get();
 
    return view('search', compact('products'));

}




 


public function productsorting(Request $request)
{
    $query = products::query();
    if($request->has('priceSort')) {
        if($request->priceSort == 'high-to-low') 
        {
            $query->orderby('price', 'desc');
        } 
        elseif($request->priceSort == 'low-to-high') 
        {
         $query->orderby('price', 'asc');
        }

        }
        $products = $query->get();
return view('productsorting',compact('products'));

    }



    public function addcart(Request $request )
    {
       $products = Products::find($request->product_id);

       
       if($products->remain_qty < $request->purchasequantity ){

        return redirect()->back()->with('success', 'not stock available!');

       }
       
       $products->remain_qty -= $request->purchasequantity;
       $products->sale_qty += $request->purchasequantity;
 
           $products->save();
        

        Cart::create([
            

             'user_id' =>'1',
            'product_id' => $request->product_id,
            'purchasequantity' => $request->purchasequantity,
            'sale_qty' => $products->sale_qty,
            'remain_qty' => $products->remain_qty,
        ]);
      

        $cartCount= Cart::where('user_id','1')->sum('purchasequantity');
        
        session()->put('cartCount',$cartCount);
        return redirect('viewcart')->with('success','product added!');
        
    }

    public function filterByColor(Request $request)
    {
        
        $selectedColor = $request->input('color', 'all');
    

        $query = DB::table('products')
            ->join('colors', 'colors.color', '=', 'products.color')
            ->select('products.*', 'colors.color','colors.remain', 'colors.sale', 'colors.purchase');
    
        
        if ($selectedColor !== 'all') {
            $query->where('colors.color', $selectedColor);
        }
    
        
        $products = $query->get();
    
    
        $availableColors = DB::table('colors')->distinct()->pluck('color');
    
        return view('filterByColor', compact('products', 'availableColors', 'selectedColor'));
    }


    }
    











