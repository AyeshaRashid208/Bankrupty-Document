<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questionaire;
use Exception;
use Illuminate\Http\Request;

class QuestionaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionaire = Questionaire::get();
        return view('admin.questionaire.index',compact('questionaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try{
            $q = new Questionaire;
            $q->name = $request->name;
            $q->spouse_name = $request->spouse_name;
            $q->security_no = $request->security_no;
            $q->spouse_security_no = $request->spouse_security_no;
            $q->dob = $request->dob;
            $q->spouse_dob = $request->spouse_dob;
            $q->list_name = $request->list_name;
            $q->paper_name = $request->paper_name;
            $q->list_address = $request->list_address;
            $q->list_address_date = $request->list_address_date;
            $q->involved = $request->involved;
            $q->installment = $request->installment;
            $q->fee_full = $request->fee_full;
            $q->fee_file = $request->fee_file;
            $q->business = $request->business;
            $q->credit_course = $request->credit_course;
            $q->complete = $request->complete;
            $q->consumer_debt = $request->consumer_debt;
            $q->long_term = $request->long_term;
            $q->aware_fraud = $request->aware_fraud;
            $q->pay_someone = $request->pay_someone;
            $q->person_name = $request->person_name;
            $q->person_detail = $request->person_detail;
            $q->user_id = Auth()->user()->id;
            $q->save();
            return redirect('admin/questionaire')->with('success','Bankruptcy Quetionaire has created!');
        }catch(Exception $e){
            return back()->with($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $q = Questionaire::find($id);
        return view('admin.questionaire.show',compact('q'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionaire $questionaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionaire $questionaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionaire  $questionaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $q = Questionaire::find($request->id);
        $q->delete();
        return response(['message' => 'Questionaire delete successfully']);
    }
}
