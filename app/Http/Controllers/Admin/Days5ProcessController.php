<?php

namespace App\Http\Controllers\Admin;

use App\Days5Process;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class Days5ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $day5 = Days5Process::all();
        return view('admin.day5.index',compact('day5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.day5.create');
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
            $day5 = new Days5Process;
            $day5->heading = $request->heading;
            $day5->description = $request->description;
            $day5->save();
            return redirect('admin/days5-7')->with('success','5-7 Days Processing has created!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Days5Process  $Days5Process
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $day5 = Days5Process::find($id);
        return view('admin.day5.show',compact('day5'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Days5Process  $Days5Process
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $day5 = Days5Process::find($id);
        return view('admin.day5.edit',compact('day5'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Days5Process  $Days5Process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $day5 = Days5Process::find($id);
            $day5->heading = $request->heading;
            $day5->description = $request->description;
            $day5->update();
            return redirect('admin/days5-7')->with('success','5-7 Days Processing has updated!');
        }catch(Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Days5Process  $Days5Process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $day5 = Days5Process::find($request->id);
        $day5->delete();
        return response(['message' => '5-7 Days Processing Time delete successfully']);
    }
}
