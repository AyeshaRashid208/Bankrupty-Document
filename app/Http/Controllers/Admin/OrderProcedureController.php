<?php

namespace App\Http\Controllers\Admin;

use App\OrderProcedure;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class OrderProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_pro = OrderProcedure::all();
        return view('admin.order_pro.index',compact('order_pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_pro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $order_pro = new OrderProcedure;
            $order_pro->heading = $request->heading;
            $order_pro->description = $request->description;
            $order_pro->save();
            return redirect('admin/order-procedure')->with('success','Order Procedure has created!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderProcedure  $orderProcedure
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order_pro = OrderProcedure::find($id);
        return view('admin.order_pro.show',compact('order_pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderProcedure  $orderProcedure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_pro = OrderProcedure::find($id);
        return view('admin.order_pro.edit',compact('order_pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderProcedure  $orderProcedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $order_pro = OrderProcedure::find($id);
            $order_pro->heading = $request->heading;
            $order_pro->description = $request->description;
            $order_pro->update();
            return redirect('admin/order-procedure')->with('success','Order Procedure has updated!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderProcedure  $orderProcedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $order_pro = OrderProcedure::find($request->id);
        $order_pro->delete();
        return response(['message' => 'Order Procedure delete successfully']);
    }
}
