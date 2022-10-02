<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Money;
use App\Models\Process;
use App\Models\User;
use Illuminate\Http\Request;

class MoneyController extends Controller
{

    public function index(){

        $moneies = Money::get();
        return view('back.money.index',compact('moneies'));
    }


    public function create(){
        $users = User::where('code', '!=' , null)->get();
        $processes = Process::get();
        return view('back.money.create' , compact('users','processes'));
    }

    public function store(Request $request){

        $data = $request->all();
        Money::create($data);
        return redirect()->route('money.index');
    }

    public function edit($id){
        $users = User::where('code', '!=' , null)->get();
        $processes = Process::get();
        $money = Money::findOrfail($id);
        return view('back.money.edit' , compact('users','processes' , 'money'));

    }

    public function update(Request $request , $id){
        $data = $request->all();
        $money = Money::findOrfail($id);
        $money->update($data);
        return redirect()->route('money.index');
    }

    public function destroy($id){
        $money = Money::findOrfail($id);
        $money->delete();
        return redirect()->route('money.index');

    }
}
