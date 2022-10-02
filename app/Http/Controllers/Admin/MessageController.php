<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::get();
        return view('back.message.index' , compact('messages'));
    }

    public function destroy($id){
        $message = Message::findOrfail($id);
        $message->delete();
        return redirect()->route('message.index');
    }
}
