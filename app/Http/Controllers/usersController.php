<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\history;


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
    }
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
        if($request->image!=null){
            $file=$request->image;
            $imageName = time().'.'.$request->image->extension();  
            $file->move(public_path('images/usersimgs').'/',$imageName);
            $user->image =$imageName;
        }
        $user->save();
        $redirect = '/profile';
        return redirect($redirect);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function index_para($id,$historyID)
        {
            $user = User::find($id);
            // send user data by user id

            // update para id
            $userRequest= history::find($historyID);
            $userRequest->paramidicid = Auth::user()->id; 
            $userRequest->save();
            // end update para id

            $user_loaction = history::find($historyID);
            // find location by history id

            return view('/after-paramedic-accept-request', compact('user','user_loaction'));
        }
}
