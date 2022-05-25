<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\get;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Paramedic;


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
    
    public function store_para(Request $request)
    {
        $message = get::Where('userid',Auth::guard('paramedic')->user()->id)->first();
        // $para = Paramedic::find(Auth::guard('paramedic')->user()->id);
        $message = new get ;
        $message->userid =Auth::user()->id;
        $message->name =$request->name;
        $message->email =$request->email;
        $message->message =$request->message;
        $message->save();
        return redirect('/paramedic/home');
    }

    public function index()
    {
        $messages = get::get();
        return view('/contactUsAdmin', compact('messages'));  
    }
}
