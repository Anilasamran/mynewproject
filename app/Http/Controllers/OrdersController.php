<?php

namespace App\Http\Controllers;
use TCPDF;
use App\Models\orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Orders::all();
        return view ('order',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createorder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Orders;
        $order->product_id = $request->product_id;
            $order->user_id = $request->user_id;
            $order->purchasequantity = $request->purchasequantity;
            $order->sale_qty = $request->sale_qty;
            $order->remain_qty = $request->remain_qty;
    
            $order->save();
            return redirect('orders')->with('flash_message','order added') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::find($id);
            
        return view('showorder',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(orders $orders)
    {
        //
    }
    public function generatepdf()
    {
        $order = Orders::all();
        $title = 'Orders Report'; 
        $date = date('m/d/y');
        $data = [
            'order' =>$order,
            'title' => $title,
            'date' => date('m/d/y'),
        ];
        $html =  view('generatepdf',$data)->render();
           $pdf = new TCPDF();
           $pdf-> AddPage();
            $pdf->writeHTML($html, true, false, true, false, '');
            return response($pdf->Output('orders_pdf', 'I'))
            ->header('Content_Type', 'application/pdf');
    }
}
