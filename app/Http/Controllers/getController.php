<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\get;
use Illuminate\Support\Facades\Auth;

class getController extends Controller
{
    public function store(Request $request)
    {
        $message = get::Where('userid',Auth::user()->id)->first();
        $message = new get ;
        $message->userid =Auth::user()->id;
        $message->name =$request->name;
        $message->email =$request->email;
        $message->message =$request->message;
        $message->save();
        return redirect('/home');
    }

    public function index()
    {
        $messages = get::get();
        return view('admin/contactUsAdmin', compact('messages'));  
    }
}
