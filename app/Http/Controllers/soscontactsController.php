<?php

namespace App\Http\Controllers;
use App\Models\soscontacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class soscontactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_soscontacts = soscontacts::Where('userid',Auth::user()->id)->get();
        $count = soscontacts::Where('userid',Auth::user()->id)->count();
        return view('sos-contacts', compact('All_soscontacts', 'count'));  
    }



    
    public function showSos()
    {
        // // dd($soscontacts);
        
        // $soscontacts = soscontacts::join('users', 'users.id', '=', 'soscontacts.userid')
        // ->Where('userid',Auth::user()->id)
        // ->select('soscontacts.*', 'users.image')->get();
        // return view('home', compact('soscontacts')); 
        
        $soscontacts = soscontacts::where('userid',auth::user()->id)->get();
        return view('home', compact('soscontacts')); 
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
        $contact = SosContacts::Where('userid',Auth::user()->id)->first();
        $contact = new SosContacts ;
        $contact->userid =Auth::user()->id;
        $contact->contactname =$request->name;
        $contact->phonenumber =$request->phone;
        $contact->sosphoto ='avatar.jpg';
        if($request->has ('sosphoto')){
            $file=$request->sosphoto;
            $imageName = time().'.'.$request->sosphoto->extension();  
            $file->move(public_path('/images/usersimgs').'/',$imageName);
            $contact->sosphoto =$imageName;
        }
        $contact->save();
        return redirect('/sos-contacts');
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
    public function delete($id)
    {
        $contact=soscontacts::find($id);
        $contact->delete();
        return redirect('sos-contacts');    
    }
}
