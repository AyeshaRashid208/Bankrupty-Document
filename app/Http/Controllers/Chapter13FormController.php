<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Chapter13;
use Illuminate\Http\Request;
use Auth;

class Chapter13FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('asd');
        $team = Chapter13::orderBy('created_at','DESC')->where('user_id','=',Auth()->user()->id)->get();
        return view('client.chapter13.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.chapter13.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'number' => 'required|max:255',
                'file' => 'required'
            ]
        );
        $team = new Chapter13;
        $team->user_id=Auth::user()->id;
        $team->create($request->all() + ['user_id' =>$team->user_id ]);
        
        return redirect('chapter13')->with('success','Chapter 13 has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $q = Chapter13::find($id);
        return view('client.chapter13.show',compact('q'));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Chapter13::find($id);
        return view('client.chapter13.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:255',
                'number' => 'required|max:255',
                'file'=>'required',
            ]
        );
        $team = Chapter13::find($id);
     
        $team->update($request->all()+ ['user_id' =>$team->user_id ]);
        
        return redirect('chapter13')->with('success','Chapter 13 has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $team = Chapter13::find($request->id);
        $team->delete();
        return response(['message' => 'Chapter 13 deleted successfully']);
    }
    
}
