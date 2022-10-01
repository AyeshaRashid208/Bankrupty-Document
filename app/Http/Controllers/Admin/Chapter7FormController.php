<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Part1;
use App\Part1Bussiness;
use App\Part2;
use App\Part3;
use App\Part4;
use App\Part5;
use App\Part6;
use App\Part7;
use Exception;
use Illuminate\Http\Request;

class Chapter7FormController extends Controller
{
    public function index()
    {
        $part1 = Part1::all();
        return view('admin.chapter7-form.index',compact('part1'));
    }
    public function create()
    {
        return view('admin.chapter7-form.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $part1 = new Part1;
            $part1->distric_select = $request->distric_select;
            $part1->case_no = $request->case_no;
            $part1->chapter = $request->chapter;

            $part1->first_name1 = $request->first_name1;
            $part1->middle_name1 = $request->middle_name1;
            $part1->last_name1 = $request->last_name1;
            $part1->sr_name1 = $request->sr_name1;
            $part1->first_name2 = $request->first_name2;
            $part1->middle_name2 = $request->middle_name2;
            $part1->last_name2 = $request->last_name2;
            $part1->sr_name2 = $request->sr_name2;
            $part1->first_name_8year1 = $request->first_name_8year1;
            $part1->middle_name_8year1 = $request->middle_name_8year1;
            $part1->last_name_8year1 = $request->last_name_8year1;
            $part1->first_name_8year2 = $request->first_name_8year2;
            $part1->middle_name_8year2 = $request->middle_name_8year2;
            $part1->last_name_8year2 = $request->last_name_8year2;
            $part1->first_name_8year3 = $request->first_name_8year3;
            $part1->middle_name_8year3 = $request->middle_name_8year3;
            $part1->last_name_8year3 = $request->last_name_8year3;
            $part1->first_name_8year4 = $request->first_name_8year4;
            $part1->middle_name_8year4 = $request->middle_name_8year4;
            $part1->last_name_8year4 = $request->last_name_8year4;
            $part1->ssn1 = $request->ssn1;
            $part1->itin1 = $request->itin1;
            $part1->ssn2 = $request->ssn2;
            $part1->itin2 = $request->itin2;
            $part1->user_id = Auth()->user()->id;
            $part1->save();
            // Part 1 Business
            $part1_b = new Part1Bussiness;
            $part1_b->petition_id = $part1->id;
            $part1_b->business1 = $request->business1;
            $part1_b->business2 = $request->business2;
            if ($request->business1 == 'Yes') {
                $part1_b->business_name1 = $request->business_name1;
                $part1_b->ein1 = $request->ein1;
                $part1_b->business_name2 = $request->business_name2;
                $part1_b->ein2 = $request->ein2;
            }
            if ($request->business2 == 'Yes') {
                $part1_b->business_name3 = $request->business_name3;
                $part1_b->ein3 = $request->ein3;
                $part1_b->business_name4 = $request->business_name4;
                $part1_b->ein4 = $request->ein4;
            }
            $part1_b->address1 = $request->address1;
            $part1_b->city1 = $request->city1;
            $part1_b->state1 = $request->state1;
            $part1_b->zipcode1 = $request->zipcode1;
            $part1_b->country1 = $request->country1;
            $part1_b->mail_address1 = $request->mail_address1;
            $part1_b->mail_po_box1 = $request->mail_po_box1;
            $part1_b->mail_city1 = $request->mail_city1;
            $part1_b->mail_state1 = $request->mail_state1;
            $part1_b->mail_zipcode1 = $request->mail_zipcode1;
            $part1_b->address2 = $request->address2;
            $part1_b->city2 = $request->city2;
            $part1_b->state2 = $request->state2;
            $part1_b->zipcode2 = $request->zipcode2;
            $part1_b->country2 = $request->country2;
            $part1_b->mail_address2 = $request->mail_address2;
            $part1_b->mail_po_box2 = $request->mail_po_box2;
            $part1_b->mail_city2 = $request->mail_city2;
            $part1_b->mail_state2 = $request->mail_state2;
            $part1_b->mail_zipcode2 = $request->mail_zipcode2;
            $part1_b->distric_type1 = $request->distric_type1;
            $part1_b->distric_type2 = $request->distric_type2;
            if ($request->distric_type1 == 'No') {
                $part1_b->distric_reason1 = $request->distric_reason1;
            }
            if ($request->distric_type2 == 'No') {
                $part1_b->distric_reason2 = $request->distric_reason2;
            }
            $part1_b->save();

            // Part 2
            $part2 = new Part2;
            $part2->petition_id = $part1->id;
            $part2->bankruptcy = $request->bankruptcy;
            $part2->fee_type = $request->fee_type;
            $part2->bankruptcy_8year = $request->bankruptcy_8year;
            if ($request->bankruptcy_8year == 'Yes') {
                $part2->distric81 = $request->distric81;
                $part2->date81 = $request->date81;
                $part2->case81 = $request->case81;
                $part2->distric82 = $request->distric82;
                $part2->date82 = $request->date82;
                $part2->case82 = $request->case82;
                $part2->distric83 = $request->distric83;
                $part2->date83 = $request->date83;
                $part2->case83 = $request->case83;
            }
            $part2->case_pending = $request->case_pending;
            if ($request->case_pending == 'Yes') {
                $part2->case_debtor1 = $request->case_debtor1;
                $part2->case_relation1 = $request->case_relation1;
                $part2->case_distric1 = $request->case_distric1;
                $part2->case_date1 = $request->case_date1;
                $part2->case_no1 = $request->case_no1;
                $part2->case_debtor2 = $request->case_debtor2;
                $part2->case_relation2 = $request->case_relation2;
                $part2->case_distric2 = $request->case_distric2;
                $part2->case_date2 = $request->case_date2;
                $part2->case_no2 = $request->case_no2;
            }
            $part2->residence_rent = $request->residence_rent;
            if ($request->residence_rent == 'Yes') {
                $part2->initial_statement = $request->initial_statement;
            }
            $part2->save();

            // Part 3
            $part3 = new Part3;
            $part3->petition_id = $part1->id;
            $part3->business = $request->business;
            if ($request->business == 'Yes') {
                $part3->business_name = $request->business_name;
                $part3->business_address = $request->business_address;
                $part3->business_city = $request->business_city;
                $part3->business_state = $request->business_state;
                $part3->business_zipcode = $request->business_zipcode;
                $part3->business_type = $request->business_type;
            }
            $part3->chapter11 = $request->chapter11;
            $part3->save();

            // Part 4
            $part4 = new Part4;
            $part4->petition_id = $part1->id;
            $part4->hazard = $request->hazard;
            if ($request->hazard == 'Yes') {
                $part4->hazard_detail = $request->hazard_detail;
                $part4->immediate_attention = $request->immediate_attention;
                $part4->property_address = $request->property_address;
                $part4->property_city = $request->property_city;
                $part4->property_state = $request->property_state;
                $part4->property_zipcode = $request->property_zipcode;
            }
            $part4->save();

            // Part 5
            $part5 = new Part5;
            $part5->petition_id = $part1->id;
            $part5->credit_couseling1 = $request->credit_couseling1;
            if ($request->credit_couseling1 == '4') {
                $part5->credit_couseling_reason1 = $request->credit_couseling_reason1;
            }
            if ($request->credit_couseling2 == '4') {
                $part5->credit_couseling_reason2 = $request->credit_couseling_reason2;
            }
            $part5->save();

            // Part6
            $part6 = new Part6;
            $part6->petition_id = $part1->id;
            $part6->consumer_debts = $request->consumer_debts;
            $part6->business_debts = $request->business_debts;
            $part6->debit_type = $request->debit_type;
            $part6->under_chapter7 = $request->under_chapter7;
            if ($request->under_chapter7 == 'Yes') {
                $part6->admin_expense = $request->admin_expense;
            }
            $part6->credit_own = $request->credit_own;
            $part6->asset_worth = $request->asset_worth;
            $part6->liabilities = $request->liabilities;
            $part6->save();
            //Part7
            $part7 = new Part7;
            $part7->petition_id = $part1->id;
            $part7->signature_debtor1 = $request->signature_debtor1;
            $part7->executed_date1 = $request->executed_date1;
            $part7->signature_debtor2 = $request->signature_debtor2;
            $part7->executed_date2 = $request->executed_date2;
            $part7->attorney_signature = $request->attorney_signature;
            $part7->attorney_date = $request->attorney_date;
            $part7->printed_name = $request->printed_name;
            $part7->firm_name = $request->firm_name;
            $part7->firm_address = $request->firm_address;
            $part7->firm_city = $request->firm_city;
            $part7->firm_state = $request->firm_state;
            $part7->firm_zipcode = $request->firm_zipcode;
            $part7->firm_phone = $request->firm_phone;
            $part7->firm_email = $request->firm_email;
            $part7->bar_number = $request->bar_number;
            $part7->bar_state = $request->bar_state;
            $part7->long_term = $request->long_term;
            $part7->aware_fraud = $request->aware_fraud;
            $part7->someone_pay = $request->someone_pay;
            if ($request->someone_pay == 'Yes') {
                $part7->person_name = $request->person_name;
            }
            $part7->signature1 = $request->signature1;
            $part7->signature1_date = $request->signature1_date;
            $part7->signature1_phone = $request->signature1_phone;
            $part7->signature1_cell = $request->signature1_cell;
            $part7->signature1_email = $request->signature1_email;
            $part7->signature2 = $request->signature2;
            $part7->signature2_date = $request->signature2_date;
            $part7->signature2_phone = $request->signature2_phone;
            $part7->signature2_cell = $request->signature2_cell;
            $part7->signature2_email = $request->signature2_email;
            $part7->save();
                return redirect('admin/chapter7-form');
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
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
    public function edit($id)
    {
        $part1 = Part1::find($id);
        $part1_b = Part1Bussiness::where('petition_id',$id)->first();
        $part2 = Part2::where('petition_id',$id)->first();
        $part3 = Part3::where('petition_id',$id)->first();
        $part4 = Part4::where('petition_id',$id)->first();
        $part5 = Part5::where('petition_id',$id)->first();
        $part6 = Part6::where('petition_id',$id)->first();
        $part7 = Part7::where('petition_id',$id)->first();
        return view('admin.chapter7-form.edit',compact('part1','part1_b','part2','part3','part4','part5','part6','part7'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        try {
            $part1 = Part1::find($id);
            $part1->distric_select = $request->distric_select;
            $part1->case_no = $request->case_no;
            $part1->chapter = $request->chapter;

            $part1->first_name1 = $request->first_name1;
            $part1->middle_name1 = $request->middle_name1;
            $part1->last_name1 = $request->last_name1;
            $part1->sr_name1 = $request->sr_name1;
            $part1->first_name2 = $request->first_name2;
            $part1->middle_name2 = $request->middle_name2;
            $part1->last_name2 = $request->last_name2;
            $part1->sr_name2 = $request->sr_name2;
            $part1->first_name_8year1 = $request->first_name_8year1;
            $part1->middle_name_8year1 = $request->middle_name_8year1;
            $part1->last_name_8year1 = $request->last_name_8year1;
            $part1->first_name_8year2 = $request->first_name_8year2;
            $part1->middle_name_8year2 = $request->middle_name_8year2;
            $part1->last_name_8year2 = $request->last_name_8year2;
            $part1->first_name_8year3 = $request->first_name_8year3;
            $part1->middle_name_8year3 = $request->middle_name_8year3;
            $part1->last_name_8year3 = $request->last_name_8year3;
            $part1->first_name_8year4 = $request->first_name_8year4;
            $part1->middle_name_8year4 = $request->middle_name_8year4;
            $part1->last_name_8year4 = $request->last_name_8year4;
            $part1->ssn1 = $request->ssn1;
            $part1->itin1 = $request->itin1;
            $part1->ssn2 = $request->ssn2;
            $part1->itin2 = $request->itin2;
            $part1->update();
            // Part 1 Business
            $part1_b = Part1Bussiness::where('petition_id',$id)->first();
            $part1_b->business1 = $request->business1;
            $part1_b->business2 = $request->business2;
            if ($request->business1 == 'Yes') {
                $part1_b->business_name1 = $request->business_name1;
                $part1_b->ein1 = $request->ein1;
                $part1_b->business_name2 = $request->business_name2;
                $part1_b->ein2 = $request->ein2;
            }
            if ($request->business2 == 'Yes') {
                $part1_b->business_name3 = $request->business_name3;
                $part1_b->ein3 = $request->ein3;
                $part1_b->business_name4 = $request->business_name4;
                $part1_b->ein4 = $request->ein4;
            }
            $part1_b->address1 = $request->address1;
            $part1_b->city1 = $request->city1;
            $part1_b->state1 = $request->state1;
            $part1_b->zipcode1 = $request->zipcode1;
            $part1_b->country1 = $request->country1;
            $part1_b->mail_address1 = $request->mail_address1;
            $part1_b->mail_po_box1 = $request->mail_po_box1;
            $part1_b->mail_city1 = $request->mail_city1;
            $part1_b->mail_state1 = $request->mail_state1;
            $part1_b->mail_zipcode1 = $request->mail_zipcode1;
            $part1_b->address2 = $request->address2;
            $part1_b->city2 = $request->city2;
            $part1_b->state2 = $request->state2;
            $part1_b->zipcode2 = $request->zipcode2;
            $part1_b->country2 = $request->country2;
            $part1_b->mail_address2 = $request->mail_address2;
            $part1_b->mail_po_box2 = $request->mail_po_box2;
            $part1_b->mail_city2 = $request->mail_city2;
            $part1_b->mail_state2 = $request->mail_state2;
            $part1_b->mail_zipcode2 = $request->mail_zipcode2;
            $part1_b->distric_type1 = $request->distric_type1;
            $part1_b->distric_type2 = $request->distric_type2;
            if ($request->distric_type1 == 'No') {
                $part1_b->distric_reason1 = $request->distric_reason1;
            }
            if ($request->distric_type2 == 'No') {
                $part1_b->distric_reason2 = $request->distric_reason2;
            }
            $part1_b->update();

            // Part 2
            $part2 = Part2::where('petition_id',$id)->first();
            $part2->bankruptcy = $request->bankruptcy;
            $part2->fee_type = $request->fee_type;
            $part2->bankruptcy_8year = $request->bankruptcy_8year;
            if ($request->bankruptcy_8year == 'Yes') {
                $part2->distric81 = $request->distric81;
                $part2->date81 = $request->date81;
                $part2->case81 = $request->case81;
                $part2->distric82 = $request->distric82;
                $part2->date82 = $request->date82;
                $part2->case82 = $request->case82;
                $part2->distric83 = $request->distric83;
                $part2->date83 = $request->date83;
                $part2->case83 = $request->case83;
            }
            $part2->case_pending = $request->case_pending;
            if ($request->case_pending == 'Yes') {
                $part2->case_debtor1 = $request->case_debtor1;
                $part2->case_relation1 = $request->case_relation1;
                $part2->case_distric1 = $request->case_distric1;
                $part2->case_date1 = $request->case_date1;
                $part2->case_no1 = $request->case_no1;
                $part2->case_debtor2 = $request->case_debtor2;
                $part2->case_relation2 = $request->case_relation2;
                $part2->case_distric2 = $request->case_distric2;
                $part2->case_date2 = $request->case_date2;
                $part2->case_no2 = $request->case_no2;
            }
            $part2->residence_rent = $request->residence_rent;
            if ($request->residence_rent == 'Yes') {
                $part2->initial_statement = $request->initial_statement;
            }
            $part2->update();

            // Part 3
            $part3 = Part3::where('petition_id',$id)->first();
            $part3->business = $request->business;
            if ($request->business == 'Yes') {
                $part3->business_name = $request->business_name;
                $part3->business_address = $request->business_address;
                $part3->business_city = $request->business_city;
                $part3->business_state = $request->business_state;
                $part3->business_zipcode = $request->business_zipcode;
                $part3->business_type = $request->business_type;
            }
            $part3->chapter11 = $request->chapter11;
            $part3->update();

            // Part 4
            $part4 = Part4::where('petition_id',$id)->first();
            $part4->hazard = $request->hazard;
            if ($request->hazard == 'Yes') {
                $part4->hazard_detail = $request->hazard_detail;
                $part4->immediate_attention = $request->immediate_attention;
                $part4->property_address = $request->property_address;
                $part4->property_city = $request->property_city;
                $part4->property_state = $request->property_state;
                $part4->property_zipcode = $request->property_zipcode;
            }
            $part4->update();

            // Part 5
            $part5 = Part5::where('petition_id',$id)->first();
            $part5->credit_couseling1 = $request->credit_couseling1;
            if ($request->credit_couseling1 == '4') {
                $part5->credit_couseling_reason1 = $request->credit_couseling_reason1;
            }
            if ($request->credit_couseling2 == '4') {
                $part5->credit_couseling_reason2 = $request->credit_couseling_reason2;
            }
            $part5->update();

            // Part6
            $part6 = Part6::where('petition_id',$id)->first();
            $part6->consumer_debts = $request->consumer_debts;
            $part6->business_debts = $request->business_debts;
            $part6->debit_type = $request->debit_type;
            $part6->under_chapter7 = $request->under_chapter7;
            if ($request->under_chapter7 == 'Yes') {
                $part6->admin_expense = $request->admin_expense;
            }
            $part6->credit_own = $request->credit_own;
            $part6->asset_worth = $request->asset_worth;
            $part6->liabilities = $request->liabilities;
            $part6->update();
            //Part7
            $part7 = Part7::where('petition_id',$id)->first();
            $part7->signature_debtor1 = $request->signature_debtor1;
            $part7->executed_date1 = $request->executed_date1;
            $part7->signature_debtor2 = $request->signature_debtor2;
            $part7->executed_date2 = $request->executed_date2;
            $part7->attorney_signature = $request->attorney_signature;
            $part7->attorney_date = $request->attorney_date;
            $part7->printed_name = $request->printed_name;
            $part7->firm_name = $request->firm_name;
            $part7->firm_address = $request->firm_address;
            $part7->firm_city = $request->firm_city;
            $part7->firm_state = $request->firm_state;
            $part7->firm_zipcode = $request->firm_zipcode;
            $part7->firm_phone = $request->firm_phone;
            $part7->firm_email = $request->firm_email;
            $part7->bar_number = $request->bar_number;
            $part7->bar_state = $request->bar_state;
            $part7->long_term = $request->long_term;
            $part7->aware_fraud = $request->aware_fraud;
            $part7->someone_pay = $request->someone_pay;
            if ($request->someone_pay == 'Yes') {
                $part7->person_name = $request->person_name;
            }
            $part7->signature1 = $request->signature1;
            $part7->signature1_date = $request->signature1_date;
            $part7->signature1_phone = $request->signature1_phone;
            $part7->signature1_cell = $request->signature1_cell;
            $part7->signature1_email = $request->signature1_email;
            $part7->signature2 = $request->signature2;
            $part7->signature2_date = $request->signature2_date;
            $part7->signature2_phone = $request->signature2_phone;
            $part7->signature2_cell = $request->signature2_cell;
            $part7->signature2_email = $request->signature2_email;
            $part7->update();
                return redirect('admin/chapter7-form');
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function destroy(Request $request)
    {
        $team = Part1::find($request->id);
        $team->delete();
        return response(['message' => 'Chapter 7 Form Data delete successfully']);
    }
}
