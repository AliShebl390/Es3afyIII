<?php

namespace App\Http\Controllers;
use App\Models\medicalhistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class medicalhistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $medicalhistory = medicalhistory::Where('userid',$id)->first();
        $medicalhistory->surgeries =json_decode($medicalhistory->surgeries);
        $medicalhistory->allergies =json_decode($medicalhistory->allergies);
        $medicalhistory->chronic_disease =json_decode($medicalhistory->chronic_disease);
        $medicalhistory->medications =json_decode($medicalhistory->medications);
        return view('current-user-medical-history',compact('medicalhistory'));
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
    public function store(Request $request)
    {
        $medicalhistory = medicalhistory::Where('userid',Auth::user()->id)->first();
        if($medicalhistory==null)
        {
            $medicalhistory = new medicalhistory ;
            $medicalhistory->userid =Auth::user()->id;
        }
        $medicalhistory->surgeries =json_encode($request->surgeries);
        $medicalhistory->allergies =json_encode($request->allergies);
        $medicalhistory->chronic_disease =json_encode($request->chronic_disease);
        $medicalhistory->medications =json_encode($request->medications);
        $medicalhistory->save();
        return redirect('/national-id-front');
        // return view('national-id-front',compact('medicalhistory'));
    }

    public function store_menu(Request $request)
    {
        $medicalhistory = medicalhistory::Where('userid',Auth::user()->id)->first();
        if($medicalhistory==null)
        {
            $medicalhistory = new medicalhistory ;
            $medicalhistory->userid =Auth::user()->id;
        }
        $medicalhistory->surgeries =json_encode($request->surgeries);
        $medicalhistory->allergies =json_encode($request->allergies);
        $medicalhistory->chronic_disease =json_encode($request->chronic_disease);
        $medicalhistory->medications =json_encode($request->medications);
        $medicalhistory->save();
        return redirect('/home');
        // return view('home',compact('medicalhistory'));
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
