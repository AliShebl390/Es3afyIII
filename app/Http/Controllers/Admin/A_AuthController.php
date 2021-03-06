<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;


class A_AuthController extends Controller
{
    public function create(request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|confirmed|min:8',
        ]);
        $admin = new admin();
        $admin->name =$request->name;
        $admin->email =$request->email;
        $admin->password =\Hash::make($request->password);
        $save = $admin->save();
        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as Admin');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

    public function store(request $request)
    {
        Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'));
        return redirect('/admin/home');
    }

    public function destroy()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}