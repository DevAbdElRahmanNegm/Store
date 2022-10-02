<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AdminController extends Controller
{
    public function index(){

        $admins = Admin::get();
        return view('back.admin.index',compact('admins'));
    }

    public function create(){
        return view('back.admin.create');
    }
    public function store(Request $request){

        $data = $request->all();
        Admin::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=> Hash::make($data['password']),
        ]);
        return redirect()->route('admin.index');
    }

    public function edit($id){

        $admin = Admin::findOrfail(auth()->id());
        return view('back.admin.edit' , compact('admin'));
    }

    public function update(Request $request , $id){

        $data = $request->all();
        $admin = Admin::findOrfail($id);
        if ($request->has('password')){
            $admin->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=> Hash::make($data['password']),
            ]);
        }else{
            $admin->update([
                'name'=>$data['name'],
                'email'=>$data['email'],
                'password'=>$admin['password'],
            ]);
        }

        return redirect()->route('admin.index');
    }

    public function destroy($id){
        $admin = Admin::findOrfail($id);
        $admin->delete();
        return redirect()->route('admin.index');
    }
}
