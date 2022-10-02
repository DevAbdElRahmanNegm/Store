<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index (){

        $about = About::first();
        return view('back.about.index' , compact('about'));
    }

    public function edit($id){

        $about = About::findOrfail($id);
        return view('back.about.edit' , compact('about'));
    }

    public function update(Request $request, $id)
    {


        $requestArray = $request->all();

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = rand(10 , 100) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/'), $filename);
            $requestArray = ['image' => $filename] + $request->all();
        }

        $row = About::findOrfail($id);

        $row->update($requestArray);
        return redirect()->route('about.index');

    }


}
