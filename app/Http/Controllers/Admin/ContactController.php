<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index (){

        $contact = Contact::first();
        return view('back.contact.index' , compact('contact'));
    }

    public function edit($id){

        $contact = Contact::findOrfail($id);
        return view('back.contact.edit' , compact('contact'));
    }

    public function update(Request $request , $id){

        $data = $request->all();
        $contact = Contact::find($id);
        $contact->update($data);
        return redirect()->route('contact.index');
    }
}
