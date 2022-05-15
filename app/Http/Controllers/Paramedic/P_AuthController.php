<?php

namespace App\Http\Controllers\Paramedic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Paramedic;


class P_AuthController extends Controller
{
    public function create(request $request){
        $para = new Paramedic();
        $para->name =$request->name;
        $para->email =$request->email;
        $para->password =\Hash::make($request->password);
        $save = $para->save();
        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as Paramedic');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

    public function store(request $request)
    {
        if (!Auth::guard('paramedic')->attempt($request->only('email', 'password'), $request->filled('remember'))){
            // throw ValidationException::withMessege([
            //     'email' => 'Invalid email or password'
            // ]);     
        }
        return redirect()->intended(route('paramedic.home'));
    }

    public function destroy()
    {
        Auth::guard('paramedic')->logout();
        return redirect('/');
    }

}