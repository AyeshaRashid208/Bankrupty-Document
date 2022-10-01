<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Bankrupty;
use Illuminate\Http\Request;

class BankruptyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Bankrupty::orderBy('created_at','DESC')->get();
        return view('admin/bankrupty.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/bankrupty.create');
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
        $team = new Bankrupty;
        $team->create($request->all());
        
        return redirect('admin/bankrupty')->with('success','Bankrupty Document has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Bankrupty::find($id);
        return view('admin/bankrupty.edit',compact('team'));
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
        $team = Bankrupty::find($id);
     
        $team->update($request->all());
        
        return redirect('admin/bankrupty')->with('success','Bankrupty Document has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $team = Team::find($request->id);
        $team->delete();
        return response(['message' => 'Team Member delete successfully']);
    }
}
