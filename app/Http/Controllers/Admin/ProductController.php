<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index(){

        $products=Product::get();

        return view('back.product.index',compact('products'));

    }

    public function create(){

        return view('back.product.create' );
    }

    public function store(Request $request){

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename=  rand(10 , 100).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/products') , $filename);
            $requestArray =  ['image' => $filename]+$request->all();

            Product::create($requestArray);
        }else{
            Product::create($request->all());
        }

        return redirect()->route('product.index');

    }

    public function edit($id){

        $product = Product::find($id);
        return view('back.product.edit' , compact( 'product'));
    }

    public function update(Request $request , $id){

        $requestArray = $request->all();

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = rand(10 , 100) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/products'), $filename);
            $requestArray = ['image' => $filename] + $request->all();
        }

        $row = Product::findOrfail($id);

        $row->update($requestArray);
        return redirect()->route('product.index');
    }

    public function destroy($id){
        $row = Product::find($id);
        unlink(public_path('images/products/'.$row->image));
        $row->delete();
        return redirect()->route('product.index');

    }

    public function OrderForProduct($id){
        $orders = Order::where('product_id','=',$id)->get();
        return view('back.product.orders',compact('orders'));
    }

    public function orders(){

        $orders = Order::get();
        return view('back.orders' , compact('orders'));
    }
    public function orderDelete($id){
        $order = Order::findOrfail($id);
        $order->delete();
        return redirect()->route('orders.index');
    }
}
