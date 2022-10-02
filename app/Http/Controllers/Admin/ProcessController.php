<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProcessController extends Controller
{

    public function index(){

        $processes = Process::get();
        return view('back.process.index',compact('processes'));
    }


    public function create(){
        $users = User::where('code', '!=' , null)->get();
        $products = Product::get();
        return view('back.process.create' , compact('users','products'));
    }

    public function store(Request $request){

        $data = $request->all();
        Process::create($data);
        return redirect()->route('process.index');
    }

    public function edit($id){
        $users = User::where('code', '!=' , null)->get();
        $products = Product::get();
        $process = Process::findOrfail($id);
        return view('back.process.edit' , compact('users','products' , 'process'));

    }

    public function update(Request $request , $id){
        $data = $request->all();
        $process = Process::findOrfail($id);
        $process->update($data);
        return redirect()->route('process.index');
    }

    public function destroy($id){
        $process = Process::findOrfail($id);
        $process->delete();
        return redirect()->route('process.index');

    }

}
