<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function  getLogin(){

        return view('back.login');
    }

    public function login(Request $request){



        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admin.index');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function AdminLogout()
    {
        dd('Done');
        auth()->guard('admin')->logout();

        return redirect()->route('admin.login');

    }
}
