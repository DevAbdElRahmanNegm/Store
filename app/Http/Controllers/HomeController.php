<?php

namespace App\Http\Controllers;

use App\Http\Requests\Message;
use App\Http\Requests\Order;
use App\Http\Requests\withdraw;
use App\Models\About;
use App\Models\Contact;
use App\Models\Money;
use App\Models\Process;
use App\Models\Product;
use App\Models\Property;



class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function  Product(){
        $products = Product::paginate(8);
        return view('front.product' , compact('products'));
    }
    public function ProductShow($id){

        $product = Product::findOrfail($id);
        return view('front.product-info' , compact('product'));

    }

    public function order(Order $order){

        $data = $order->all();

        \App\Models\Order::create($data);
        return redirect()->back()->with('message', 'Order Sent Success! .. we will call you');

    }
    public function  about(){
        $about = About::first();
        $properties = Property::get();
        return view('front.about' , compact('about' , 'properties'));
    }

    public function contact(){
        $contact = Contact::first();
        return view('front.contact' , compact('contact'));
    }

    public function MessageStore(Message $request){
        $data = $request->all();
        \App\Models\Message::create($data);
        return redirect()->back()->with('message', 'Message Sent Success!');
    }

    public function balance(){
        $processes = Process::where('user_id' , '=' , auth()->user()->id)->get();
        $monies = Money::where('user_id' , '=' , auth()->user()->id)->get();
        $price = $monies->sum('price');
        return view('front.balance' , compact('processes', 'monies' , 'price'));
    }

    public function withdraw(){

        $withdrawpending = \App\Models\WithDraw::where('user_code','=',auth()->user()->code)
            ->where('status','=','pending')->get();

        if ($withdrawpending->isEmpty()){
            return view('front.draw');
        }else{

            return redirect()->route('error')->with('message', 'Your Request Still Pending');
        }

    }

    public function withDrawSent(withdraw $request){


       $data = $request->all();
       $withdraw = \App\Models\Money::where('user_id','=',auth()->user()->id)->sum('price');
       if ($withdraw >= $data['amount']){
           \App\Models\WithDraw::create($data);
           return redirect('/home')->with('message', 'Request Sent Success!');
       }else{
           return redirect()->back()->with('message', 'Your amount request is greater than your all money in balance page Please check your balance page');
       }

    }


    public function getUserCodeView(){

        return view('front.getusercode');
    }




}
