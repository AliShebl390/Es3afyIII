<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allUsers = User::join('_nationalid', '_nationalid.userid','=','users.id')
        ->select('users.*','_nationalid.front as NIDfront','_nationalid.back as NIDback','_nationalid.selfie as NIDselfie')->get();
        return view('/user',compact('allUsers'));

        // $allUsers = User::get();
        // return view('/user', compact('allUsers'));
    }

    public function index_para($id)
    {
        $user = User::find($id);
        return view('/after-paramedic-accept-request', compact('user'));
    }

    // public function index_para_home($id)
    // {
    //     $user = User::find($id);
    //     return view('paramedic/Home', compact('user'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = new User ;
        // $user->name =$request->name;
        // $user->email =$request->email;
        // $user->password =$request->password;
        // $user->gender =$request->gender;
        // $user->age =$request->birthday;
        // $user->phonenum =$request->phonenum;
        // $user->bloodType =$request->bloodType;
        // $user->weight =$request->weight;
        // $user->height =$request->height;
        // $user->save();
        // return redirect('/medical-history');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = user::find(Auth::user()->id);
        return view('home',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = user::find(Auth::user()->id);
        return view('Profile',compact('user')); 
    }
    public function edit_for_para($id)
    {
        $user = user::find($id);
        return view('paramedic/paramedicHome',compact('user')); 
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = user::find($request->id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phonenum =$request->phonenum;
        $file=$request->image;
        $imageName = time().'.'.$request->image->extension();  
        $file->move(public_path('images/usersimgs').'/',$imageName);
        $user->image =$imageName;
        $user->save();
        $redirect = '/profile';
        return redirect($redirect);
    }

    public function update_password(Request $request)
    {
        // $password = user::find(Auth::user()->id);
        // $password->password =$request->password;
        // // $password -> Hash::make($request->password);
        // $password->save();
        // $redirect = '/home';
        // return redirect($redirect);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
