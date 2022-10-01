<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bankrupty;
use Auth;
class BankruptyController extends Controller
{
    public function index()
    {
        $bankruptcy = Bankrupty::where('user_id',Auth()->user()->id)->get();
        return view('client.bankrupty.index',compact('bankruptcy'));
    }
    public function create()
    {
        // dd(Auth::user()->subscription);
        return view('client.bankrupty.create');
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
        $team = new Bankrupty;
        $team->user_id = Auth()->user()->id;
        // dd($team->user_id);
        $team::create($request->all() + ['user_id' =>$team->user_id ]);
        // $team->create($request->all());
        
        return redirect('bankrupty')->with('success','Bankrupty Document has created!');
    }
    public function show($id)
    {
        $q = Bankrupty::find($id);
        return view('client.bankrupty.show',compact('q'));
    }
    public function destroy(Request $request)
    {
        $q = Bankrupty::find($request->id);
        $q->delete();
        return response(['message' => 'Deleted successfully']);
    }
    public function edit($id)
    {
        $team = Bankrupty::find($id);
        return view('client/bankrupty.edit',compact('team'));
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
        $team = Bankrupty::find($id);
     
        $team->update($request->all()+ ['user_id' =>$team->user_id ]);
        
        return redirect('bankrupty')->with('success','Bankrupty Document has updated!');
    }

}
