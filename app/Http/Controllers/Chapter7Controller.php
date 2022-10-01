<?php

namespace App\Http\Controllers;
use App\Chapter7;
use Illuminate\Http\Request;

class Chapter7Controller extends Controller
{
    public function index()
    {
        $team = Chapter7::where('user_id',Auth()->user()->id)->get();
        return view('client.chapter7.index',compact('team'));
    }
    public function create()
    {
        return view('client.chapter7.create');
    }
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
        $team->user_id = Auth()->user()->id;
        // dd($team->user_id);
        $team::create($request->all() + ['user_id' =>$team->user_id ]);
        // $team->create($request->all());
        
        return redirect('chapter7')->with('success','Bankrupty Document has created!');
    }
    public function show($id)
    {
        $q = Chapter7::find($id);
        return view('client.chapter7.show',compact('q'));
    }
    public function destroy(Request $request)
    {
        $q = Chapter7::find($request->id);
        $q->delete();
        return response(['message' => 'Deleted successfully']);
    }
    public function edit($id)
    {
        $team = Chapter7::find($id);
        return view('client/chapter7.edit',compact('team'));
    }
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
     
        $team->update($request->all()+ ['user_id' =>$team->user_id ]);
        
        return redirect('chapter7')->with('success','Chapter 7 has been updated!');
    }
}
