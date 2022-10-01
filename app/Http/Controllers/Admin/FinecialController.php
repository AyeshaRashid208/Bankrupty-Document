<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FinecialController extends Controller
{
    public function index()
    {
        
        return view('admin.finecial.create');
    }
    public function show($id){
        $part1 = Part1::find($id);
        $part1_b = Part1Bussiness::where('petition_id',$id)->first();
        $part2 = Part2::where('petition_id',$id)->first();
        $part3 = Part3::where('petition_id',$id)->first();
        $part4 = Part4::where('petition_id',$id)->first();
        $part5 = Part5::where('petition_id',$id)->first();
        $part6 = Part6::where('petition_id',$id)->first();
        $part7 = Part7::where('petition_id',$id)->first();
        return view('bankruptcy_data',compact('part1','part1_b','part2','part3','part4','part5','part6','part7'));
    }
    public function destroy(Request $request)
    {
        $team = Part1::find($request->id);
        $team->delete();
        return response(['message' => 'Chapter 7 Form Data delete successfully']);
    }
}
