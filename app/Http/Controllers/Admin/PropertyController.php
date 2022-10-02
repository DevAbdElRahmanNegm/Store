<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){

        $properties = Property::get();
        return view('back.property.index'  , compact('properties'));
    }

    public function create(){
        return view('back.property.create');
    }
    public function store(Request $request){

        $data = $request->all();
        Property::create($data);
        return redirect()->route('property.index');

    }

    public function edit($id){
        $property = Property::findOrfail($id);
        return view('back.property.edit' , compact('property'));
    }

    public function update(Request $request , $id){

        $data = $request->all();
        $property = Property::find($id);
        $property->update($data);
        return redirect()->route('property.index');
    }

    public function destroy($id){

        $property = Property::findOrfail($id);
        $property->delete();
        return redirect()->route('property.index');
    }

}
