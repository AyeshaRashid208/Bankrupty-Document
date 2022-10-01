<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Chapter7;
use Illuminate\Http\Request;

class Chapter3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Chapter7::orderBy('created_at','DESC')->get();
        return view('admin/chapter3.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/chapter3.create');
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
        $team = new Chapter7;
        $team->create($request->all());
        
        return redirect('admin/chapter7')->with('success','Chapter 7 has created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter7  $chapter7
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter7 $chapter7)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapter7  $chapter7
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Chapter7::find($id);
        return view('admin/chapter3.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapter7  $chapter7
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
        $team = Chapter7::find($id);
     
        $team->update($request->all());
        
        return redirect('admin/chapter7')->with('success','Chapter 7 has updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter7  $chapter7
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $team = Chapter7::find($request->id);
        $team->delete();
        return response(['message' => 'Chapter 7 delete successfully']);
    }
}