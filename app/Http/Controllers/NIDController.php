<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\NID;

class NIDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_front(Request $request)
    {
        $NID = NID::Where('userid',Auth::user()->id)->first();
        if($NID==null)
        {
            $NID = new NID ;
            $NID->userid =Auth::user()->id;
        }
        $file=$request->front;
        $imageName = time().'.'.$request->front->extension();  
        $file->move(public_path().'/images/usersimgs',$imageName);
        $NID->front =$imageName;
        $NID->save();
        return redirect('/naitonal-id-back');
    }

    public function store_back(Request $request)
    {
        $NID = NID::Where('userid',Auth::user()->id)->first();
        if($NID==null)
        {
            $NID = new NID ;
            $NID->userid =Auth::user()->id;
            
        }
        $file=$request->back;
        $imageName = time().'.'.$request->back->extension();  
        $file->move(public_path().'/images/usersimgs',$imageName);
        $NID->back =$imageName;
        $NID->save();
        return redirect('/national-id-selfie');
    }

    public function store_selfie(Request $request)
    {
        $NID = NID::Where('userid',Auth::user()->id)->first();
        if($NID==null)
        {
            $NID = new NID ;
            $NID->userid =Auth::user()->id;
            
        }
        $file=$request->selfie;
        $imageName = time().'.'.$request->selfie->extension();  
        $file->move(public_path().'/images/usersimgs',$imageName);
        $NID->selfie =$imageName;
        $NID->save();
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
