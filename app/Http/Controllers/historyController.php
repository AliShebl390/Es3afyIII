<?php

namespace App\Http\Controllers;
use App\Models\history;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class historyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $All_history = history::join('paramedic', 'paramedic.id', '=', 'paramedic.paramedicid') 
        // ->select('paramedic.*', 'paramedic.name as name')->get();
        
        $All_history = DB::table('history')
        ->join('paramedics','paramedics.id', "=" , 'history.paramidicid')
        ->join('users','users.id', "=" , 'history.userid')
        ->select('history.*', 'users.name as username', 'users.image as userimage', 'paramedics.name as paraname')
        ->get();
        // dd($All_history);
        return view('/History-main',compact('All_history'));
    }

    public function index_1()
    {   
        $All_history1 = history::Where('userid',Auth::user()->id)->get();
        return view('req-comp-for-user',compact('All_history1'));
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
        $rate = history::find($request->historyID);
        $rate->Rate =$request->rate;
        $rate->feedback =$request->comments;
        $rate->save();
        return redirect('req-comp-for-user/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = history::find($id);
        return view('req-details',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request)
    {
        //
    }

    public function show_rate($id)
    {
        return view('/rating',compact('id'));
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
