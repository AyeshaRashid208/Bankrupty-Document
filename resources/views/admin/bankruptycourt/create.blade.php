@extends('layouts.admin')
@section('content')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="my-2 text-center" style="text-decoration: underline;">United States Bankruptcy Court</h3>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">in re Debtor(s) </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Case # </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                                 <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label class="mb-2">Chapter </label>
                                        <input type="text" class="form-control inputs" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-center">APPLICATION TO PAY FILING FEE IN INSTALLMENTS <br>FOR INDIVIDUALS OR JOINT DEBTORS</h4>
                            <p>In accordance with Fed. R. Bankr. P. 1006 and General Order No. 23-2018 (Bankr. N.D. GA.) I apply for permission to pay
                            the filing fee amounting to $  <span class="fw-bold border-bottom"> 310.00  </span>in no more than three (3) installments. I understand that if I fail to pay any fee installment
                            when due my bankruptcy case may be dismissed without opportunity for hearing, in accordance with Local Rules.</p>
                            <p>I am unable to pay the filing fee except in installments</p>
                            <p> certify that I will neither make any further payment nor transfer any property for services in connection with this case until
                            the filing fee is paid in full.</p>
                            <p> I propose the following terms for the payment of the filing fee:</p>
                            <p>First Installment of <span class="fw-bold"> $ 75.00 </span>, with the filing of the petition.</p>
                            <p>Second Installment of at least one-half of the unpaid balance of the filing fee in the amount of<span class="fw-bold">  $ 117.50  </span> , on or before 30
                            days from the date the bankruptcy petition was filed.</p>
                            <p>
                                Final Installment of the remaining unpaid balance of the filing fee in the amount of<span class="fw-bold"> $ 117.50 </span>, on or before 60 days from
                                the date the bankruptcy petition was filed.</p>
                            <h6>understand that if I fail to pay any fee installment when due my bankruptcy case may be dismissed without opportunity for hearing, in accordance with Local Rules
                             </h6>
                             <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Signature of Attorney</label>
                                        <input type="text" class="form-control inputs" placeholder=""> 
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Date</label>
                                        <input type="date" class="form-control inputs" placeholder=""> 
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Signature of Debtor</label>
                                        <input type="text" class="form-control inputs" placeholder=""> 
                                    </div>
                                </div>
                                 <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Date</label>
                                        <input type="date" class="form-control inputs" placeholder=""> 
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label class="mb-2">Name of Attorney</label>
                                        <input type="text" class="form-control inputs" placeholder=""> 
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                     <div class="form-group">
                                        <label class="mb-2">Signature of Joint Debtor</label>
                                        <input type="text" class="form-control inputs" placeholder=""> 
                                    </div>
                                </div>
                             </div>
                            <h5 class="mt-4">Fill in this information to identify your case:</h5>
                            <div class="form-group">
                                        <label class="mb-2">United States Bankruptcy Court for the: </label>
                                        <input type="text" class="form-control inputs" placeholder=""> 
                                </div>
                                 <div class="form-group">
                                        <label class="mb-2">Case # </label>
                                        <input type="text" class="form-control inputs" placeholder=""> 
                                </div>
                                <h4 style="text-decoration: underline;">Statement About Your Social Security Numbers</h4>
                                <p>Use this form to tell the court about any Social Security or federal Individual Taxpayer Identification numbers you have used. Do not file this
                                form as part of the public case file. This form must be submitted separately and must not be included in the court’s public electronic records. 
                                Please consult local court procedures for submission requirements. <br>
                                To protect your privacy, the court will not make this form available to the public. You should not include a full Social Security Number or
                                Individual Taxpayer Number on any other document filed with the court. The court will make only the last four digits of your numbers known
                                to the public. However, the full numbers will be available to your creditors, the U.S. Trustee or bankruptcy administrator, and the trustee
                                assigned to your case.<br>
                                Making a false statement, concealing property, or obtaining money or property by fraud in connection with a bankruptcy case can result in
                                fines up to $250,000, or imprisonment for up to 20 years, or both. 18 U.S.C. §§ 152, 1341, 1519, and 3571.</p>
                                <h5>Part 1)
                                Tell the Court About Yourself and Your spouse if Your Spouse is Filing With You</h5>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        
                                    </div>
                                     <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h5  class="d-none d-md-block" >For Debtor 1:</h5>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h5 class="d-none d-md-block">For Debtor 2 (Only if Spouse is Filing:</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                          <h5  class="d-none d-md-block" > Your name </h5>
                                    </div>
                                     <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h5  class="d-block d-md-none" >For Debtor 1:</h5>
                                            <div class="form-group">
                                                <label class="mb-2">First Name </label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-2">Midel Name </label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-2">Last Name </label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                            </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h5 class="d-block d-md-none">For Debtor 2 (Only if Spouse is Filing:</h5>
                                                 <div class="form-group">
                                                <label class="mb-2">First Name </label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-2">Midel Name </label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-2">Last Name </label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                 <div class="row">
                                    <div class="col-12 col-md-4">
                                          <h5  class="d-none d-md-block"> All Social Security Numbers you have used </h5>
                                    </div>
                                     <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h5  class="d-block d-md-none"> For Debtor 1:</h5>
                                            <div class="form-group">
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                                <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1"> You do not have a Social Security Number</label>
                                    </div>
                                    
                                            </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h5 class="d-block d-md-none">For Debtor 2 (Only if Spouse is Filing:</h5>
                                                 <div class="form-group">
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                                <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2"> You do not have a Social Security Number</label>
                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                     <div class="row">
                                    <div class="col-12 col-md-4">
                                          <h6  class="d-none d-md-block"> All federal Individual Taxpayer Identification Numbers (ITIN) you have used </h6>
                                    </div>
                                     <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h5  class="d-block d-md-none"> For Debtor 1:</h5>
                                            <div class="form-group">
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                                <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">  You do not have an ITIN</label>
                                    </div>
                                    
                                            </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h5 class="d-block d-md-none">You do not have an ITIN</h5>
                                                 <div class="form-group">
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                                <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                        <label class="form-check-label" for="inlineCheckbox2"> You do not have a Social Security Number</label>
                                    </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5>part 3 ) Sign Below</h5>
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        
                                    </div>
                                     <div class="col-12 col-md-8">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <h5  class="d-block d-md-none"> For Debtor 1:</h5>
                                            <div class="form-group">
                                                <label>Under penalty of perjury, I declare that the information I
                                                    have provided in this form is true and correct</label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                                <small>Signature of Debtor 1</small>
                                            </div>
                                             <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control inputs" placeholder=""> 
                                            </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <h5 class="d-block d-md-none">You do not have an ITIN</h5>
                                                 <div class="form-group">
                                                <label>Under penalty of perjury, I declare that the information Ihave provided in this form is true and correct</label>
                                                <input type="text" class="form-control inputs" placeholder=""> 
                                                <small>Signature of Debtor 2</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" class="form-control inputs" placeholder=""> 
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                    </div>
                </div>
            </div>
        </div>

@endsection