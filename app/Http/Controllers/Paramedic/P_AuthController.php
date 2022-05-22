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
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:paramedics',
            'password' => 'required|string|confirmed|min:8',
        ]);
        $para = new Paramedic();
        $para->name =$request->name;
        $para->email =$request->email;
        $para->age =$request->age;
        $para->phonenumber =$request->phonenumber;
        $file=$request->image;
        $imageName = time().'.'.$request->image->extension();  
        $file->move(public_path('images/usersimgs').'/',$imageName);
        $para->image =$imageName;
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
        return redirect()->intended(route('home'));
    }

    public function show()
    {   
        $para = Paramedic::find(Auth::guard('paramedic')->user()->id);
        return view('home',compact('para'));
    }

    public function destroy()
    {
        Auth::guard('paramedic')->logout();
        return redirect('/');
    }

    // function for shoing data at the admin's para 
    public function index()
    {
        $allParamedicals = Paramedic::get();
        return view('/home', compact('allParamedicals'));
    }

    // function for deleting data at the admin's para 
    public function delete($id)
    {
        $oneParamedical = Paramedic::find($id);
        $oneParamedical->delete();
        return redirect('admin/home');
    }

    // function for showing data at the para's profile
    public function showpara()
    {
        $para = Paramedic::find(Auth::guard('paramedic')->user()->id);
        return view('Profile',compact('para')); 
    }
        // function for updating data at the para's profile
    public function update(Request $request)
    {
        $para = Paramedic::find($request->id);
        $para->name =$request->name;
        $para->email =$request->email;
        $para->phonenumber =$request->phonenumber;
        $file=$request->image;
        $imageName = time().'.'.$request->image->extension();  
        $file->move(public_path('images').'/',$imageName);
        $para->image =$imageName;
        $para->save();
        $redirect = 'paramedic/profile';
        return redirect($redirect);
    }
}