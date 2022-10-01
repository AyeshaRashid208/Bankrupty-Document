<?php

namespace App\Http\Controllers\Admin;

use App\Chapter7Data;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Chapter7DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapter7_data = Chapter7Data::orderBy('created_at','DESC')->get();
        return view('admin/chapter7_data.index',compact('chapter7_data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chapter7Data  $chapter7Data
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter7Data $chapter7Data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chapter7Data  $chapter7Data
     * @return \Illuminate\Http\Response
     */
    public function edit(Chapter7Data $chapter7Data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chapter7Data  $chapter7Data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter7Data $chapter7Data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapter7Data  $chapter7Data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter7Data $chapter7Data)
    {
        //
    }
}
