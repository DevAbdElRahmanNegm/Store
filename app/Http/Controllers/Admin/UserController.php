<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('back.users.index' , compact('users'));
    }

    public function edit($id){

        $user = User::findOrfail($id);
        return view('back.users.edit' , compact('user'));

    }

    public function update(Users $request , $id){

        $code = $request['code'];
        $user = User::findOrfail($id);
        $user->update([
            'code'=>$code,
        ]);
        return redirect()->route('user.index');
    }
    public function destroy($id){
        $user = User::findOrfail($id);
        $user->delete();
        return redirect()->route('user.index');

    }
}
