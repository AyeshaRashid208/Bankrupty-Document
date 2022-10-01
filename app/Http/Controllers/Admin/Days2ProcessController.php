<?php

namespace App\Http\Controllers\Admin;

use App\Days2Process;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class Days2ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day2 = Days2Process::all();
        return view('admin.day2.index',compact('day2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.day2.create');
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
            $day2 = new Days2Process;
            $day2->heading = $request->heading;
            $day2->description = $request->description;
            $day2->save();
            return redirect('admin/days2-3')->with('success','2-3 Days Processing has created!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Days2Process  $Days2Process
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $day2 = Days2Process::find($id);
        return view('admin.day2.show',compact('day2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Days2Process  $Days2Process
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $day2 = Days2Process::find($id);
        return view('admin.day2.edit',compact('day2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Days2Process  $Days2Process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $day2 = Days2Process::find($id);
            $day2->heading = $request->heading;
            $day2->description = $request->description;
            $day2->update();
            return redirect('admin/days2-3')->with('success','2-3 Days Processing has updated!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Days2Process  $Days2Process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $day2 = Days2Process::find($request->id);
        $day2->delete();
        return response(['message' => '2-3 Days Processing Time delete successfully']);
    }
}
