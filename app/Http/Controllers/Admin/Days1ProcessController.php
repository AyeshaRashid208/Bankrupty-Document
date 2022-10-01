<?php

namespace App\Http\Controllers\Admin;

use App\Days1Process;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class Days1ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day1 = Days1Process::all();
        return view('admin.day1.index',compact('day1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.day1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $day1 = new Days1Process;
            $day1->heading = $request->heading;
            $day1->description = $request->description;
            $day1->save();
            return redirect('admin/day1')->with('success','1 Day Processing has created!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Days1Process  $Days1Process
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $day1 = Days1Process::find($id);
        return view('admin.day1.show',compact('day1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Days1Process  $Days1Process
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $day1 = Days1Process::find($id);
        return view('admin.day1.edit',compact('day1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Days1Process  $Days1Process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $day1 = Days1Process::find($id);
            $day1->heading = $request->heading;
            $day1->description = $request->description;
            $day1->update();
            return redirect('admin/day1')->with('success','1 Day Processing has updated!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Days1Process  $Days1Process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $day1 = Days1Process::find($request->id);
        $day1->delete();
        return response(['message' => '1 Day Processing Time delete successfully']);
    }
}
