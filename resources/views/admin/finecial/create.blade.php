@extends('layouts.admin')
@section('content')

<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-dark">
                                    Fill in this information to identify your case:
                                </div>
                                <div class="card-body">
                                    <p class="mb-2">Debtor 1 </p>
                                    <div class="row">
                                         <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Fisrt Name</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Midel Name</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Last Name</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    </div>
                                     <p class="mb-2">Debtor 2 </p>
                                    <div class="row">
                                         <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Fisrt Name</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Midel Name</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label class="mb-2">Last Name</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                         <div class="form-group">
                                                <label class="mb-2"> United States Bankruptcy Court for the:</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                         <div class="form-group">
                                                <label class="mb-2"> Case Number</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="my-2 text-center " style="text-decoration: underline;">Statement of Financial Affairs for Individuals Filing for Bankruptcy</h3>
                            <p class="mt-3">Be as complete and accurate as possible. If two married people are filing together, both are equally responsible for supplying correct
                            information. If more space is needed, attach a separate sheet to this form. On the top of any additional pages, write your name and case
                            number (if known). Answer every question.</p>
                            <h5>Part 1) ive Details About Your Marital Status and Where You Lived Before</h5>
                            <div class="col-12">
                                <p class="mb-1">What is your current marital status?</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Married</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">No Married</label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <p class="mb-1">During the last 3 years, have you lived anywhere other than where you live now?</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. List all of the places you lived in the last 3 years. Do not include where you live now</label>
                                </div>
                            </div>
                            <hr>
                             <h5>Part 2)  Explain the Sources of Your Income</h5>
                             <h6>Did you have any income from employment or from operating a business during this year or the two previous calendar years</h6>
                             <div class="col-12 mt-3">
                                <p class="mb-1">Fill in the total amount of income you received from all jobs and all businesses, including part-time activities.
                                If you are filing a joint case and you have income that you receive together, list it only once under Debtor 1</p>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. Fill in the details.</label>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-md-6">
                                        <h6>Debtor 1</h6>
                                        <div class="row">
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2">Sources of income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2"> Gross income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h6>Debtor 2</h6>
                                        <div class="row">
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2">Sources of income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2"> Gross income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6>Did you receive any other income during this year or the two previous calendar years?</h6>
                                <p>Include income regardless of whether that income is taxable. Examples of other income are alimony; child support; Social Security, unemployment,
                                    and other public benefit payments; pensions; rental income; interest; dividends; money collected from lawsuits; royalties; and gambling and lottery
                                    winnings. If you are filing a joint case and you have income that you received together, list it only once under Debtor 1</p>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. Fill in the details.</label>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-md-6">
                                        <h6>Debtor 1</h6>
                                        <div class="row">
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2">Sources of income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2"> Gross income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h6>Debtor 2</h6>
                                        <div class="row">
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2">Sources of income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                            <div class="col-21 col-md-6">
                                                <div class="form-group">
                                                <label class="mb-2"> Gross income</label>
                                                <input type="text" class="form-control inputs" placeholder="">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <hr>
                            <h5>Part 3) List Certain Payments You Made Before You Filed for Bankruptcy</h5>
                            <h6>Are either Debtor 1’s or Debtor 2’s debts primarily consumer debts?</h6>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No. Neither Debtor 1 nor Debtor 2 has primarily consumer debts. Consumer debts are defined in 11 U.S.C. § 101(8) as “incurred by an
                                        individual primarily for a personal, family, or household purpose.”</label>
                                </div>
                                <div class="px-3">
                                    <p>During the 90 days before you filed for bankruptcy, did you pay any creditor a total of $6,825* or more?</p>
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No. Go to line 7</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes List below each creditor to whom you paid a total of $6,825* or more in one or more payments and the total amount you
                                    paid that creditor. Do not include payments for domestic support obligations, such as child support and alimony. Also, do
                                    not include payments to an attorney for this bankruptcy case.</label>
                                </div>
                                <small>* Subject to adjustment on 4/01/22 and every 3 years after that for cases filed on or after the date of adjustment</small>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. Debtor 1 or Debtor 2 or both have primarily consumer debts</label>
                                </div>
                                <small>During the 90 days before you filed for bankruptcy, did you pay any creditor a total of $600 or more?</small>
                                <div class="px-3">
                                    
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No. Go to line 7</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">List below each creditor to whom you paid a total of $600 or more and the total amount you paid that creditor. Do not
                                    include payments for domestic support obligations, such as child support and alimony. Also, do not include payments to an
                                    attorney for this bankruptcy case.</label>
                                </div>
                               
                                </div>
                            <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">reditor's Name and Address:</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates of payment   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates of payment   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Amount youstill owe </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6> Within 1 year before you filed for bankruptcy, did you make a payment on a debt you owed anyone who was an insider?</h6>
                            <p>Insiders include your relatives; any general partners; relatives of any general partners; partnerships of which you are a general partner; corporations
                            of which you are an officer, director, person in control, or owner of 20% or more of their voting securities; and any managing agent, including one for
                            a business you operate as a sole proprietor. 11 U.S.C. § 101. Include payments for domestic support obligations, such as child support and
                            alimony.</p>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. List all payments to an insider</label>
                                </div>
                             <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">reditor's Name and Address:</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates of payment   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates of payment   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Amount youstill owe </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <h6>Within 1 year before you filed for bankruptcy, did you make any payments or transfer any property on account of a debt that benefited an insider?</h6>
                            <p>include payments on debts guaranteed or cosigned by an insider.</p>
                             <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">reditor's Name and Address:</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates of payment   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates of payment   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Amount youstill owe </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Part 4) Identify Legal Actions, Repossessions, and Foreclosures</h5>
                            <h6>Within 1 year before you filed for bankruptcy, were you a party in any lawsuit, court action, or administrative proceeding?</h6>
                            <p>List all such matters, including personal injury cases, small claims actions, divorces, collection suits, paternity actions, support or custody
                            modifications, and contract disputes</p>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  Yes. Fill in the details</label>
                                </div>
                             <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Case title</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Case Number</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Nature of the case   </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Court or agency  </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Status of the case </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>Within 1 year before you filed for bankruptcy, was any of your property repossessed, foreclosed, garnished, attached, seized, or levied</h6>
                            <p>heck all that apply and fill in the details below.</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No. Go to line 11.</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  Yes. Fill in the information below.</label>
                                </div>
                                <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Creditor Name and Address</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-2">Describe the Property</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Explain what happened  </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date  </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Value of the property </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6> Within 90 days before you filed for bankruptcy, did any creditor, including a bank or financial institution, set off any amounts from your
                            accounts or refuse to make a payment because you owed a debt?</h6>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No. Go to line 11.</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. Fill in the details.</label>
                                </div>
                                <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Creditor Name and Address</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                     <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">escribe the action the creditor took</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date action was taken </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Amount  </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>Within 1 year before you filed for bankruptcy, was any of your property in the possession of an assignee for the benefit of creditors, a court-appointed receiver, a custodian, or another official?</h6>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  Yes</label>
                                </div>
                                <h5 class="mt-4">Part 5 ) List Certain Gifts and Contribution</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No. Go to line 11.</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. Fill in the details for each gift</label>
                                </div>
                                 <div class="row mt-2">
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Gifts with a total value of more than $600 per person</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                     <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Person to Whom You Gave the Gift and Address:</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe the gifts</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates you gavethe gifts  </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Value</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>Within 2 years before you filed for bankruptcy, did you give any gifts or contributions with a total value of more than $600 to any charity</h6>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No. Go to line 11.</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes. Fill in the details for each gift or contribution</label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Charity's Name</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe what you contribute</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Dates you contributed</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Value</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Part  6) List Certain Losses</h5>
                            <h6>Within 2 years before you filed for bankruptcy, did you give any gifts with a total value of more than $600 per person</h6>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details for each gift</label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe the property you lost and how the loss occurred</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe any insurance coverage for the loss</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date of your los</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Value of property los</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                            </div>
                            <hr>
                            <h5>Part  7) List Certain Payments or Transfers</h5>
                            <h6>Within 1 year before you filed for bankruptcy, did you or anyone else acting on your behalf pay or transfer any property to anyone you
                                consulted about seeking bankruptcy or preparing a bankruptcy petition?</h6>
                                <p>Within 1 year before you filed for bankruptcy, did you or anyone else acting on your behalf pay or transfer any property to anyone you
                                consulted about seeking bankruptcy or preparing a bankruptcy petition?</p>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Person Who Was Paid</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Address</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Email or website address of your los</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date payment or transfer was made</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                  <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">description and value of any property transferred</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                  <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Amount of payment</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                            </div>
                            <h6> Within 1 year before you filed for bankruptcy, did you or anyone else acting on your behalf pay or transfer any property to anyone who promised to help you deal with your creditors or to make payments to your creditors?</h6>
                            <p>Do not include any payment or transfer that you listed on line 16</p>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Person Who Was Paid</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Address</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Person Who Made the Payment, if Not You</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                  <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">description and value of any property transferred</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                  <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Amount of payment</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>. Within 2 years before you filed for bankruptcy, did you sell, trade, or otherwise transfer any property to anyone, other than property transferred in the ordinary course of your business or financial affairs?</h6>
                            <p>Include both outright transfers and transfers made as security (such as the granting of a security interest or mortgage on your property). Do not
                            include gifts and transfers that you have already listed on this statement.</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Person  Who Received Transfer
Address</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Person's relationship to you</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Description and value of
property transferred</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                  <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe any property or payments received or debts paid in exchange</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                  <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">spaid in exchange Date transfer was made </label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>. Within 10 years before you filed for bankruptcy, did you transfer any property to a self-settled trust or similar device of which you are a
                            beneficiary? (These are often called asset-protection devices.)</h6>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">ame of trust</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Description and value of the property transferred</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date Transfer was  made</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h5 >part 8 )  List of Certain Financial Accounts, Instruments, Safe Deposit Boxes, and Storage Units</h5>
                            <h6>. Within 1 year before you filed for bankruptcy, were any financial accounts or instruments held in your name, or for your benefit, closed,
                            sold, moved, or transferred?</h6>
                            <p>nclude checking, savings, money market, or other financial accounts; certificates of deposit; shares in banks, credit unions, brokerage
                            houses, pension funds, cooperatives, associations, and other financial institutions</p>
                              <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2"> Name of Financial Institution and</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Last 4 digits of account number</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Type of account or instrument</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date account was closed, sold,moved, or transferred</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">  Last balance before closing or transfe</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <h6>. Do you now have, or did you have within 1 year before you filed for bankruptcy, any safe deposit box or other depository for securities, cash, or other valuables?</h6>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2"> Name of Financial Institution and</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Who else had access to it?</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe the contents</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Do you still have it?</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">  Last balance before closing or transfe</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5 class="mt-3"> part 9) identify Property You Hold or Control for Someone Else</h5>
                            <p> Do you hold or control any property that someone else owns? Include any property you borrowed from, are storing for, or hold in trust for someone.</p>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2"> owner's Name</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">where is the property?</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Describe the property</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Value</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5>Port 10) Give Details About Environmental Information</h5>
                            <h6>For the purpose of Part 10, the following definitions apply:</h6>
                            <p> Environmental law means any federal, state, or local statute or regulation concerning pollution, contamination, releases of hazardous or
                            toxic substances, wastes, or material into the air, land, soil, surface water, groundwater, or other medium, including statutes or
                            regulations controlling the cleanup of these substances, wastes, or material.</p>
                            <p> Site means any location, facility, or property as defined under any environmental law, whether you now own, operate, or utilize it or used
                            to own, operate, or utilize it, including disposal sites.</p>
                            <p> Hazardous material means anything an environmental law defines as a hazardous waste, hazardous substance, toxic substance,
                            hazardous material, pollutant, contaminant, or similar term</p>
                            <h6>Report all notices, releases, and proceedings that you know about, regardless of when they occurred.</h6>
                            <p>. Has any governmental unit notified you that you may be liable or potentially liable under or in violation of an environmental law?</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2"> Name of Site</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Governmental Unit</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Environmental law, if you know it</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date of notice</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <p> Have you notified any governmental unit of any release of hazardous material?</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2"> Name of Site</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Governmental Unit</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Environmental law, if you know it</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Date of notice</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                             <p>  Have you been a party in any judicial or administrative proceeding under any environmental law? Include settlements and orders</p>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">  No</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Yes. Fill in the details </label>
                                </div>
                                 <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2"> Case Title</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Case Title</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Court or agency Name</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Nature of the case</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group">
                                        <label class="mb-2">Status of the case </label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h5> part 11) Give Details About Your Business or Connections to Any Business</h5>
                            <div class="px-4">
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">   A sole proprietor or self-employed in a trade, profession, or other activity, either full-time or part-time</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">   A member of a limited liability company (LLC) or limited liability partnership (LLP)</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> A partner in a partnership</label>
                                </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">   An officer, director, or managing executive of a corporation</label>
                                </div>

                                     <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">   An owner of at least 5% of the voting or equity securities of a corporation</label>
                                </div>
                            </div>
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No. None of the above applies. Go to Part 12.</label>
                            </div> 
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">     Yes. Check all that apply above and fill in the details below for each business</label>
                            </div>
                               <div class="row mt-2 align-items-end">
                               
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2"> Business Name </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Address (Number, Street, City, State and ZIP Code)</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Describe the nature of the business </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Name of accountant or bookkeeper</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Name of accountant or bookkeeper</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Dates business existe</label> 
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                               
                            </div>
                            <hr>
                            <h5 >part 12)  Sign Below</h5>
                            <p>I have read the answers on this Statement of Financial Affairs and any attachments, and I declare under penalty of perjury that the answers
                                are true and correct. I understand that making a false statement, concealing property, or obtaining money or property by fraud in connection
                                with a bankruptcy case can result in fines up to $250,000, or imprisonment for up to 20 years, or both.
                                18 U.S.C. §§ 152, 1341, 1519, and 3571.</p>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Signature of Debtor 1</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Signature of Debtor 1</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Date</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Date</label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                </div>
                                <p>Did you attach additional pages to Your Statement of Financial Affairs for Individuals Filing for Bankruptcy (Official Form 107)</p>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No</label>
                            </div> 
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes</label>
                            </div> 
                            <p>Did you pay or agree to pay someone who is not an attorney to help you fill out bankruptcy forms?</p>
                             <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> No</label>
                            </div> 
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1"> Yes</label>
                            </div>      
                    </div>
                </div>
            </div>
        </div>

@endsection