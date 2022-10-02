<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WithDraw;
use Illuminate\Http\Request;

class WithDrawController extends Controller
{
    public function index(){
        $draws = WithDraw::get();
        return view('back.withdraw.index' , compact('draws'));
    }

    public function edit($id){
        $draw = WithDraw::findOrfail($id);
        return view('back.withdraw.edit' , compact('draw'));
    }

        public function update(Request $request,$id){
            $status = $request['status'];
            $withdraw = WithDraw::findOrfail($id);
            $withdraw->update([
                'status'=>$status,
            ]);
            return redirect()->route('withdraw.index');
        }

        public function destroy($id){

            $withdraw = WithDraw::findOrfail($id);
            $withdraw->delete();
            return redirect()->route('withdraw.index');

        }
}
