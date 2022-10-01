@php
$data = content();
@endphp
@section('style')
<style>
    .blur-condtion{
    position: absolute;
    padding: 50px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 3;
    backdrop-filter: blur(5px);
}
</style>
@endsection

@extends('layouts.admin')
@section('content')
<div class="content-body">

    <!-- row -->
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="card">
            
                <div class="card-body">
                @if(auth::user()->subscription==null)
            <a href="/stripe" class="blur-condtion"></a>
            @endif
                    <h3 class="my-4 text-center" style="text-decoration: underline;">BANKRUPTCY QUESTIONNAIRE</h3>
                    <h6>Complete All Questions. If you and your spouse are not living together, and there is no possibility that your spouse will file bankruptcy along with you, you don't have to answer the questions about your spouse.
                     </h6>
                    <h5 class="mt-4">1. Name and Residence Information:</h5>
                    <form action="{{route('client.questionaire.store')}}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">Your full name: </label>
                                <input required type="text" class="form-control inputs" name="name" value="{{old('name')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">Your spouse’s full name: </label>
                                <input required type="text" class="form-control inputs" name="spouse_name" value="{{old('spouse_name')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">B. Your Social Security Number: </label>
                                <input required type="text" class="form-control inputs" name="security_no" value="{{old('security_no')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">Your spouse’s Social Security Number: </label>
                                <input required type="text" class="form-control inputs" name="spouse_security_no" value="{{old('spouse_security_no')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">C. Your date of birth and age: </label>
                                <input required type="text" class="form-control inputs" name="dob" value="{{old('dob')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">Your spouse’s date of birth and age: </label>
                                <input required type="text" class="form-control inputs" name="spouse_dob" value="{{old('spouse_dob')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label class="mb-2">List any other names used by you or your spouse (including maiden name), or other ways you have signed your</label>
                                <input required type="text" class="form-control inputs" name="list_name" value="{{old('list_name')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">names to papers and checks during the last eight years </label>
                                <input required type="text" class="form-control inputs" name="paper_name" value="{{old('paper_name')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label class="mb-2">List all addresses you have had in the last three years, the dates when you lived there, and the name you used while living there. If you and your spouse are filing bankruptcy together, list addresses for each for the last three years (include street, town, and zip code). </label>
                                <input required type="text" class="form-control inputs" name="list_address" value="{{old('list_address')}}" placeholder=""> </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="mb-2">Addresses Date Moved In Date Moved Out Name Used </label>
                                <input required type="text" class="form-control inputs" name="list_address_date" value="{{old('list_address_date')}}" placeholder=""> </div>
                        </div>
                    </div>
                    <h5>2. Prior Bankruptcies: </h5>
                    <div class="row">
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Have you or your spouse ever been involved before in a bankruptcy (chapter 7, 11, 12, or 13)? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" name="involved" id="inlineradio1" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" name="involved" id="inlineradio2" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Do you want to pay your filing fee in 4 installments? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" name="installment" id="inlineradio1" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" name="installment" id="inlineradio2" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Do you want to pay your filing fee in full? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="fee_full" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="fee_full" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Do you want to file for a waiver to waive your filing fee? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="fee_file" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="fee_file" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Do you own a business? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="business" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="business" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Have you taken an approved Credit Counseling Course? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="credit_course" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="credit_course" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <h4 class="my-3">For Bankruptcy  </h4>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">If yes, the date you completed it? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="complete" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="complete" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Are your debts primarily consumer debts? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="consumer_debt" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="consumer_debt" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Are you aware that filing for bankruptcy is a serious action with long-term financial and legal consequences? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="long_term" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="long_term" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Are you aware that bankruptcy fraud is a serious crime and that if your bankruptcy forms are inaccurate or incomplete, you could be fined or imprisoned? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="aware_fraud" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="aware_fraud" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <div class="col-12 my-2">
                            <label class="d-block my-2">Did you pay or agree to pay someone who is not an attorney to help you fill out your bankruptcy forms? </label>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio1" name="pay_someone" value="Yes">
                                <label class="form-check-label" for="inlineradio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input required class="form-check-input" type="radio" id="inlineradio2" name="pay_someone" value="No">
                                <label class="form-check-label" for="inlineradio2">No</label>
                            </div>
                        </div>
                        <h5 class="my-2">Name of Person</h5>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="mb-2">Attach Bankruptcy Petition Preparer’s Notice, Declaration, and Signature (Official Form 119).</label>
                                <input required type="text" class="form-control inputs" placeholder="" name="person_name" value="{{old('person_name')}}"> </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="mb-2">Please list your creditors (companies that you owe) name and addresses below:</label>
                                <textarea type="text" class="form-control" rows="8" name="person_detail" placeholder="">{{old('person_detail')}}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="col-3">
                            <div class="form-group">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
