<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function store(Request $request){



     $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'code' => $request['code'],
            'number' => $request['number'],
            'image' => $request['image'],
        ]);
        $this->guard()->login($user);
        return redirect('/home');
    }
    protected function guard()
    {
        return Auth::guard();
    }
    public function edit($id){

        $user = User::findOrfail(auth()->id());
        return view('front.profile' , compact('user'));
    }


    public function update(Request $request , $id){

        $requestArray = $request->all();

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = rand(10 , 100) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/users'), $filename);
            $requestArray = ['image' => $filename] + $request->all();
        }

        $row = User::findOrfail($id);

        $code = $row->code;
        if ($request['password'] !== null ){
            $requestArray = ['password' => Hash::make($request['password'])];
            $row->update($requestArray);
        }else{

            $row->update( ['code' => $code , 'password' => $row->password] + $requestArray );
        }


        return redirect()->route('user-edit',$row->id);
    }
}
