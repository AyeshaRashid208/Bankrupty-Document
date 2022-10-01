@php
$data = content();
@endphp
@extends('layouts.app')
@section('content')
    <!-- User Form -->
    <div class="user-form-area chapter-form ptb-100">
        <div class="container pt-4">
            <form action="{{ route('Chapter7-Form') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h5 class="mb-4">Fill in this information to identify your case:</h5>
                <div class="row">
                    <div class="col-12 col-md-4 my-select">
                        <label>United States Bankruptcy Court for the: </label>
                        <select name="distric_select" required>
                            <option value="Middle District of Alabama">Middle District of Alabama</option>
                            <option value="Northern District of Alabama">Northern District of Alabama</option>
                            <option value="Southern District of Alabama">Southern District of Alabama</option>
                            <option value="District of Alaska">District of Alaska</option>
                            <option value="District of Arizona">District of Arizona</option>
                            <option value="Eastern and Western District of Arkansas">Eastern and Western District of
                                Arkansas</option>
                            <option value="Central District of California">Central District of California</option>
                            <option value="Eastern District of California">Eastern District of California</option>
                            <option value="Northern District of California">Northern District of California</option>
                            <option value="Southern District of California">Southern District of California</option>
                            <option value="District of Colorado">District of Colorado</option>
                            <option value="District of Connecticut">District of Connecticut</option>
                            <option value="District of Columbia">District of Columbia</option>
                            <option value="District of Delaware">District of Delaware</option>
                            <option value="Middle District of Florida">Middle District of Florida</option>
                            <option value="Northern District of Florida">Northern District of Florida</option>
                            <option value="Southern District of Florida">Southern District of Florida</option>
                            <option value="Middle District of Georgia">Middle District of Georgia</option>
                            <option value="Northern District of Georgia">Northern District of Georgia</option>
                            <option value="Southern District of Georgia">Southern District of Georgia</option>
                            <option value="District of Guam">District of Guam</option>
                            <option value="District of Hawaii">District of Hawaii</option>
                            <option value="District of Idaho">District of Idaho</option>
                            <option value="Central District of Illinois">Central District of Illinois</option>
                            <option value="Northern District of Illinois">Northern District of Illinois</option>
                            <option value="Southern District of Illinois">Southern District of Illinois</option>
                            <option value="Northern District of Indiana">Northern District of Indiana</option>
                            <option value="Southern District of Indiana">Southern District of Indiana</option>
                            <option value="Northern District of Iowa">Northern District of Iowa</option>
                            <option value="Southern District of Iowa">Southern District of Iowa</option>
                            <option value="District of Kansas">District of Kansas</option>
                            <option value="Eastern District of Kentucky">Eastern District of Kentucky</option>
                            <option value="Western District of Kentucky">Western District of Kentucky</option>
                            <option value="Eastern District of Louisiana">Eastern District of Louisiana</option>
                            <option value="Middle District of Louisiana">Middle District of Louisiana</option>
                            <option value="Western District of Louisiana">Western District of Louisiana</option>
                            <option value="District of Maine">District of Maine</option>
                            <option value="District of Maryland">District of Maryland</option>
                            <option value="District of Massachusetts">District of Massachusetts</option>
                            <option value="District of Montana">District of Montana</option>
                            <option value="Eastern District of Michigan">Eastern District of Michigan</option>
                            <option value="Western District of Michigan">Western District of Michigan</option>
                            <option value="District of Minnesota">District of Minnesota</option>
                            <option value="Northern District of Mississippi">Northern District of Mississippi</option>
                            <option value="Southern District of Mississippi">Southern District of Mississippi</option>
                            <option value="Eastern District of Missouri">Eastern District of Missouri</option>
                            <option value="Western District of Missouri">Western District of Missouri</option>
                            <option value="District of Nebraska">District of Nebraska</option>
                            <option value="District of Nevada">District of Nevada</option>
                            <option value="District of New Hampshire">District of New Hampshire</option>
                            <option value="District of New Jersey">District of New Jersey</option>
                            <option value="District of New Mexico">District of New Mexico</option>
                            <option value="Eastern District of New York">Eastern District of New York</option>
                            <option value="Northern District of New York">Northern District of New York</option>
                            <option value="Southern District of New York">Southern District of New York</option>
                            <option value="Western District of New York">Western District of New York</option>
                            <option value="Eastern District of North Carolina">Eastern District of North Carolina</option>
                            <option value="Middle District of North Carolina">Middle District of North Carolina</option>
                            <option value="Western District of North Carolina">Western District of North Carolina</option>
                            <option value="District of North Dakota">District of North Dakota</option>
                            <option value="District of Northern Mariana Islands">District of Northern Mariana Islands
                            </option>
                            <option value="Northern District of Ohio">Northern District of Ohio</option>
                            <option value="Southern District of Ohio">Southern District of Ohio</option>
                            <option value="Eastern District of Oklahoma">Eastern District of Oklahoma</option>
                            <option value="Northern District of Oklahoma">Northern District of Oklahoma</option>
                            <option value="Western District of Oklahoma">Western District of Oklahoma</option>
                            <option value="District of Oregon">District of Oregon</option>
                            <option value="Eastern District of Pennsylvania">Eastern District of Pennsylvania</option>
                            <option value="Middle District of Pennsylvania">Middle District of Pennsylvania</option>
                            <option value="Western District of Pennsylvania">Western District of Pennsylvania</option>
                            <option value="District of Puerto Rico">District of Puerto Rico</option>
                            <option value="District of Rhode Island">District of Rhode Island</option>
                            <option value="District of South Carolina">District of South Carolina</option>
                            <option value="District of South Dakota">District of South Dakota</option>
                            <option value="Eastern District of Tennessee">Eastern District of Tennessee</option>
                            <option value="Middle District of Tennessee">Middle District of Tennessee</option>
                            <option value="Western District of Tennessee">Western District of Tennessee</option>
                            <option value="Eastern District of Texas">Eastern District of Texas</option>
                            <option value="Northern District of Texas">Northern District of Texas</option>
                            <option value="Southern District of Texas">Southern District of Texas</option>
                            <option value="Western District of Texas">Western District of Texas</option>
                            <option value="District of Utah">District of Utah</option>
                            <option value="District of Vermont">District of Vermont</option>
                            <option value="District of Virgin Islands">District of Virgin Islands</option>
                            <option value="Eastern District of Virginia">Eastern District of Virginia</option>
                            <option value="Western District of Virginia">Western District of Virginia</option>
                            <option value="Eastern District of Washington">Eastern District of Washington</option>
                            <option value="Western District of Washington">Western District of Washington</option>
                            <option value="Northern District of West Virginia">Northern District of West Virginia</option>
                            <option value="Southern District of West Virginia">Southern District of West Virginia</option>
                            <option value="Eastern District of Wisconsin">Eastern District of Wisconsin</option>
                            <option value="Western District of Wisconsin">Western District of Wisconsin</option>
                            <option value="District of Wyoming">District of Wyoming</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label class="mb-2">Case number (If known):</label>
                            <input type="text" class="form-control inputs" name="case_no" value="{{ old('case_no') }}"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 my-select">
                        <label> Chapter you are filing under: </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chapter" id="inlineRadio1" value="Chapter 7">
                            <label class="form-check-label" for="inlineRadio1">Chapter 7</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chapter" id="inlineRadio2"
                                value="Chapter 11">
                            <label class="form-check-label" for="inlineRadio2">Chapter 11</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chapter" id="inlineRadio3"
                                value="Chapter 12">
                            <label class="form-check-label" for="inlineRadio3">Chapter 12</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chapter" id="inlineRadio4"
                                value="Chapter 13">
                            <label class="form-check-label" for="inlineRadio4">Chapter 13</label>
                        </div>
                    </div>
                </div>
                <h4 class="my-4" style="text-decoration: underline;">Voluntary Petition for Individuals Filing for
                    Bankruptcy</h4>
                <p>he bankruptcy forms use you and Debtor 1 to refer to a debtor filing alone. A married couple may file a
                    bankruptcy case together—called a
                    joint case—and in joint cases, these forms use you to ask for information from both debtors. For
                    example, if a form asks, “Do you own a car,”
                    the answer would be yes if either debtor owns a car. When information is needed about the spouses
                    separately, the form uses Debtor 1 and
                    Debtor 2 to distinguish between them. In joint cases, one of the spouses must report information as
                    Debtor 1 and the other as Debtor 2. The
                    same person must be Debtor 1 in all of the forms. <br>
                    Be as complete and accurate as possible. If two married people are filing together, both are equally
                    responsible for supplying correct
                    information. If more space is needed, attach a separate sheet to this form. On the top of any additional
                    pages, write your name and case number
                    (if known). Answer every question.
                </p>
                <h4 style="text-decoration: underline;">1) Identify Yourself</h4>
                <div class="row">
                    <div class="col-12 col-md-4"></div>
                    <div class="col-12 col-md-4 d-md-block d-none">
                        <h5>About Debtor</h5>
                    </div>
                    <div class="col-12 col-md-4 d-md-block d-none">
                        <h5>About Debtor 2 (Spouse Only in a Joint Case)</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <p class="mb-0">Write the name that is on your government-issued picture identification
                            (for example, your driver’s license or passport).</p>
                        <p class="mb-0">Bring your picture identification to your meeting with the trustee.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor</h5>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control inputs" name="first_name1"
                                    value="{{ old('first_name1') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Middle name</label>
                                <input type="text" class="form-control inputs" name="middle_name1"
                                    value="{{ old('middle_name1') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control inputs" name="last_name1"
                                    value="{{ old('last_name1') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Suffix (Sr., Jr., II, III) name</label>
                                <input type="text" class="form-control inputs" name="sr_name1"
                                    value="{{ old('sr_name1') }}" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor 2 (Spouse Only in a Joint Case)</h5>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control inputs" name="first_name2"
                                    value="{{ old('first_name2') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Middle name</label>
                                <input type="text" class="form-control inputs" name="middle_name2"
                                    value="{{ old('middle_name2') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control inputs" name="last_name2"
                                    value="{{ old('last_name2') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Suffix (Sr., Jr., II, III) name</label>
                                <input type="text" class="form-control inputs" name="sr_name2"
                                    value="{{ old('sr_name2') }}" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold mt-4">ll other names you have used in the last 8 years</h6>
                        <p>include your married or maiden names.</p>
                        <h6 class="font-weight-bold my-3">About Debtor </h6>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control inputs" name="first_name_8year1"
                                    value="{{ old('first_name_8year1') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Middle name</label>
                                <input type="text" class="form-control inputs" name="middle_name_8year1"
                                    value="{{ old('middle_name_8year1') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control inputs" name="last_name_8year1"
                                    value="{{ old('last_name_8year1') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control inputs" name="first_name_8year2"
                                    value="{{ old('first_name_8year2') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Middle name</label>
                                <input type="text" class="form-control inputs" name="middle_name_8year2"
                                    value="{{ old('middle_name_8year2') }}" placeholder="">
                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control inputs" name="last_name_8year2"
                                    value="{{ old('last_name_8year2') }}" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor 2 (Spouse Only in a Joint Case)</h5>
                        <div class="col-12 ">
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control inputs" name="first_name_8year3"
                                        value="{{ old('first_name_8year3') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>Middle name</label>
                                    <input type="text" class="form-control inputs" name="middle_name_8year3"
                                        value="{{ old('middle_name_8year3') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control inputs" name="last_name_8year3"
                                        value="{{ old('last_name_8year3') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control inputs" name="first_name_8year4"
                                        value="{{ old('first_name_8year4') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>Middle name</label>
                                    <input type="text" class="form-control inputs" name="middle_name_8year4"
                                        value="{{ old('middle_name_8year4') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control inputs" name="last_name_8year4"
                                        value="{{ old('last_name_8year4') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-4">Only the last 4 digits of your Social Security number or federal
                            Individual Taxpayer Identification number (ITIN) </h6>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor</h5>
                        <div class="form-group">
                            <input type="text" class="form-control inputs" name="ssn1" value="{{ old('ssn1') }}"
                                placeholder="">
                        </div>
                        <h6 class="text-center my-2">OR</h6>
                        <div class="form-group">
                            <input type="text" class="form-control inputs" name="itin1" value="{{ old('itin1') }}"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor 2 (Spouse Only in a Joint Case)</h5>
                        <div class="form-group">
                            <input type="text" class="form-control inputs" name="ssn2" value="{{ old('ssn2') }}"
                                placeholder="">
                        </div>
                        <h6 class="text-center my-2">OR</h6>
                        <div class="form-group">
                            <input type="text" class="form-control inputs" name="itin2" value="{{ old('itin2') }}"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-4">ny business names and Employer Identification Numbers (EIN) you
                            have used in the last 8
                        </h6>
                        <p>yearsInclude trade names and doing business as names</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor</h5>
                        <div class=" my-select">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="business1" value="Yes"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have not used any business names or EINs
                                </label>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>Business name</label>
                            <input type="text" class="form-control inputs" name="business_name1"
                                value="{{ old('business_name1') }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Business name</label>
                            <input type="text" class="form-control inputs" name="business_name2"
                                value="{{ old('business_name2') }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>EIN</label>
                            <input type="text" class="form-control inputs" name="ein1" value="{{ old('ein1') }}"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label>EIN </label>
                            <input type="text" class="form-control inputs" name="ein2" value="{{ old('ein2') }}"
                                placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor 2 (Spouse Only in a Joint Case)</h5>
                        <div class=" my-select">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="business2" value="Yes"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have not used any business names or EINs
                                </label>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label>Business name</label>
                            <input type="text" class="form-control inputs" name="business_name3"
                                value="{{ old('business_name3') }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Business name</label>
                            <input type="text" class="form-control inputs" name="business_name4"
                                value="{{ old('business_name4') }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>EIN</label>
                            <input type="text" class="form-control inputs" name="ein3" value="{{ old('ein3') }}"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label>EIN </label>
                            <input type="text" class="form-control inputs" name="ein4" value="{{ old('ein4') }}"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-4">Where you live
                        </h6>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor</h5>
                        <div class="row">

                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control inputs" name="address1"
                                        value="{{ old('address1') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>City </label>
                                    <input type="text" class="form-control inputs" name="city1"
                                        value="{{ old('city1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mt-2">
                                <div class="form-group">
                                    <label>State </label>
                                    <input type="text" class="form-control inputs" name="state1"
                                        value="{{ old('state1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mt-2">
                                <div class="form-group">
                                    <label>ZipCode </label>
                                    <input type="text" class="form-control inputs" name="zipcode1"
                                        value="{{ old('zipcode1') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>County</label>
                            <input type="text" class="form-control inputs" name="country1" value="{{ old('country1') }}"
                                placeholder="">
                        </div>
                        <p>If your mailing address is different from the one
                            above, fill it in here. Note that the court will send
                            any notices to you at this mailing address.
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control inputs" name="mail_address1"
                                        value="{{ old('mail_address1') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label>P.O.Box </label>
                            <input type="text" class="form-control inputs" name="mail_po_box1"
                                value="{{ old('mail_po_box1') }}" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>City </label>
                                    <input type="text" class="form-control inputs" name="mail_city1"
                                        value="{{ old('mail_city1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mt-2">
                                <div class="form-group">
                                    <label>State </label>
                                    <input type="text" class="form-control inputs" name="mail_state1"
                                        value="{{ old('mail_state1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mt-2">
                                <div class="form-group">
                                    <label>ZipCode </label>
                                    <input type="text" class="form-control inputs" name="mail_zipcode1"
                                        value="{{ old('mail_zipcode1') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor 2 (Spouse Only in a Joint Case)</h5>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control inputs" name="address2"
                                        value="{{ old('address2') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>City </label>
                                    <input type="text" class="form-control inputs" name="city2"
                                        value="{{ old('city2') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mt-2">
                                <div class="form-group">
                                    <label>State </label>
                                    <input type="text" class="form-control inputs" name="state2"
                                        value="{{ old('state2') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mt-2">
                                <div class="form-group">
                                    <label>ZipCode </label>
                                    <input type="text" class="form-control inputs" name="zipcode2"
                                        value="{{ old('zipcode2') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>County</label>
                            <input type="text" class="form-control inputs" name="country2" value="{{ old('country2') }}"
                                placeholder="">
                        </div>
                        <p>If your mailing address is different from the one
                            above, fill it in here. Note that the court will send
                            any notices to you at this mailing address.
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control inputs" name="mail_address2"
                                        value="{{ old('mail_address2') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label>P.O.Box </label>
                            <input type="text" class="form-control inputs" name="mail_po_box2"
                                value="{{ old('mail_po_box2') }}" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>City </label>
                                    <input type="text" class="form-control inputs" name="mail_city2"
                                        value="{{ old('mail_city2') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-5 mt-2">
                                <div class="form-group">
                                    <label>State </label>
                                    <input type="text" class="form-control inputs" name="mail_state2"
                                        value="{{ old('mail_state2') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-3 mt-2">
                                <div class="form-group">
                                    <label>ZipCode </label>
                                    <input type="text" class="form-control inputs" name="mail_zipcode2"
                                        value="{{ old('mail_zipcode2') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-4">why you are choosing this district to file for bankruptcy </h6>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distric_type1" value="Yes"
                                id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Over the last 180 days before filing this petition,
                                I have lived in this district longer than in any
                                other district.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distric_type1" value="No"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have another reason. Explain.
                                (See 28 U.S.C. § 1408.)
                            </label>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="distric_reason1"
                                rows="3">{{ old('distric_reason1') }}</textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5 class="d-block d-md-none">About Debtor 2 (Spouse Only in a Joint Case)</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distric_type2" value="Yes"
                                id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Over the last 180 days before filing this petition,
                                I have lived in this district longer than in any
                                other district.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="distric_type2" value="No"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have another reason. Explain.
                                (See 28 U.S.C. § 1408.)
                            </label>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="distric_reason2"
                                rows="3">{{ old('distric_reason2') }}</textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="my-4" style="text-decoration: underline;">2) Tell the Court About Your Bankruptcy Case
                </h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3">The chapter of the Bankruptcy Code you are choosing to file under
                        </h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <label> Check one. (For a brief description of each, see Notice Required by 11 U.S.C. § 342(b) for
                            Individuals Filing
                            for Bankruptcy (Form 2010)). Also, go to the top of page 1 and check the appropriate
                            box.</label>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="bankruptcy" value="Chapter 7">
                            <label class="form-check-label" for="inlineRadio1">Chapter 7</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="bankruptcy" value="Chapter 11">
                            <label class="form-check-label" for="inlineRadio2">Chapter 11</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="bankruptcy" value="Chapter 12">
                            <label class="form-check-label" for="inlineRadio3">Chapter 12</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="bankruptcy" value="Chapter 13">
                            <label class="form-check-label" for="inlineRadio4">Chapter 13</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3"> How you will pay the fee</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="fee_type"
                                value="I will pay the entire fee when I file my petition">
                            <label class="form-check-label" for="inlineRadio1"> <span class="font-weight-bold">I will pay
                                    the entire fee when I file my petition.</span> Please check with the clerk’s office in
                                your
                                local court for more details about how you may pay. Typically, if you are paying the fee
                                yourself, you may pay with cash, cashier’s check, or money order. If your attorney is
                                submitting your payment on your behalf, your attorney may pay with a credit card or check
                                with a pre-printed address.</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="fee_type"
                                value="I need to pay the fee in installments">
                            <label class="form-check-label" for="inlineRadio2"> I need to pay the fee in installments. If
                                you choose this option, sign and attach the
                                Application for Individuals to Pay The Filing Fee in Installments (Official Form
                                103A).</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="fee_type"
                                value=" I request that my fee be waived">
                            <label class="form-check-label" for="inlineRadio3">I request that my fee be waived (You may request this option only if you are filing for Chapter 7.
                                By law, a judge may, but is not required to, waive your fee, and may do so only if your income is
                                less than 150% of the official poverty line that applies to your family size and you are unable to
                                pay the fee in installments). If you choose this option, you must fill out the Application to Have the
                                Chapter 7 Filing Fee Waived (Official Form 103B) and file it with your petition</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3"> Have you filed for bankruptcy within the last 8 years?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bankruptcy_8year" value="No">
                            <label class="form-check-label" for="inlineradio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bankruptcy_8year" value="Yes">
                            <label class="form-check-label" for="inlineCheckbox2">Yes</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>District </label>
                                    <input type="text" class="form-control inputs" name="distric81"
                                        value="{{ old('distric81') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>When </label>
                                    <input type="Date" class="form-control inputs" name="date81"
                                        value="{{ old('date81') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Case number </label>
                                    <input type="text" class="form-control inputs" name="case81"
                                        value="{{ old('case81') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>District </label>
                                    <input type="text" class="form-control inputs" name="distric82"
                                        value="{{ old('distric82') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>When </label>
                                    <input type="Date" class="form-control inputs" name="date82"
                                        value="{{ old('date82') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Case number </label>
                                    <input type="text" class="form-control inputs" name="case82"
                                        value="{{ old('case82') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>District </label>
                                    <input type="text" class="form-control inputs" name="distric83"
                                        value="{{ old('distric83') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>When </label>
                                    <input type="Date" class="form-control inputs" name="date83"
                                        value="{{ old('date83') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Case number </label>
                                    <input type="text" class="form-control inputs" name="case83"
                                        value="{{ old('case83') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3"> Are any bankruptcy cases pending or being filed by a spouse who
                            is not filing this case withyou, or by a business partner, or by an affiliate?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="case_pending" value="No">
                            <label class="form-check-label" for="inlineradio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="case_pending" value="Yes">
                            <label class="form-check-label" for="inlineradio2">Yes</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8 mt-2">
                                <div class="form-group">
                                    <label>Debtor </label>
                                    <input type="text" class="form-control inputs" name="case_debtor1"
                                        value="{{ old('case_debtor1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Relationship to you </label>
                                    <input type="Date" class="form-control inputs" name="case_relation1"
                                        value="{{ old('case_relation1') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>District </label>
                                    <input type="text" class="form-control inputs" name="case_distric1"
                                        value="{{ old('case_distric1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>When </label>
                                    <input type="Date" class="form-control inputs" name="case_date1"
                                        value="{{ old('case_date1') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Case number </label>
                                    <input type="text" class="form-control inputs" name="case_no1"
                                        value="{{ old('case_no1') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>District </label>
                                    <input type="text" class="form-control inputs" name="case_distric2"
                                        value="{{ old('case_distric2') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>When </label>
                                    <input type="Date" class="form-control inputs" name="case_date2"
                                        value="{{ old('case_date2') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Case number </label>
                                    <input type="text" class="form-control inputs" name="case_no2"
                                        value="{{ old('case_no2') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3"> Do you rent your residence?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="residence_rent" value="No">
                            <label class="form-check-label" for="inlineradio1">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="residence_rent" value="Yes">
                            <label class="form-check-label" for="inlineradio2">Yes</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="initial_statement" value="No">
                            <label class="form-check-label" for="inlineradio2"> No. Go to line 12</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="initial_statement" value="Yes">
                            <label class="form-check-label" for="inlineradio2"> Yes. Fill out Initial Statement About an
                                Eviction Judgment Against You (Form 101A) and file it as
                                part of this bankruptcy petition</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="my-4" style="text-decoration: underline;">3) Report About Any Businesses You Own as a
                    Sole Proprietor</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3"> Are any bankruptcy cases pending or being filed by a spouse who
                            is not filing this case withyou, or by a business partner, or by an affiliate?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="business" value="Yes">
                            <label class="form-check-label" for="inlineradio1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="business" value="No">
                            <label class="form-check-label" for="inlineradio2">No</label>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <label>Name of business, if any </label>
                                    <input type="text" class="form-control inputs" name="business_name"
                                        value="{{ old('business_name') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mt-2">
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control inputs" name="business_address"
                                        value="{{ old('business_address') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>City </label>
                                    <input type="text" class="form-control inputs" name="business_city"
                                        value="{{ old('business_city') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>State </label>
                                    <input type="text" class="form-control inputs" name="business_state"
                                        value="{{ old('business_state') }}" placeholder="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-2">
                                <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control inputs" name="business_zipcode"
                                        value="{{ old('business_zipcode') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">Check the appropriate box to describe your business:</p>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="business_type" value="Health Care Business">
                            <label class="form-check-label" for="inlineCheckbox1"> Health Care Business (as defined in 11
                                U.S.C. § 101(27A))</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_type"
                                value="Single Asset Real Estate">
                            <label class="form-check-label" for="inlineCheckbox2">Single Asset Real Estate (as defined in
                                11 U.S.C. § 101(51B)</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="business_type" value="Stockbroker">
                            <label class="form-check-label" for="inlineCheckbox1">Stockbroker (as defined in 11 U.S.C. §
                                101(53A))</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="business_type" value="Commodity Broker">
                            <label class="form-check-label" for="inlineCheckbox2"> Commodity Broker (as defined in 11
                                U.S.C. § 101(6))</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="business_type" value="None of the above">
                            <label class="form-check-label" for="inlineCheckbox2">None of the above</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3"> . Are you filing under Chapter 11 of the Bankruptcy Code and are
                            you a small business debtor?</h6>
                        <p>For a definition of small business debtor, see 11 U.S.C. § 101(51D).</p>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>f you are filing under Chapter 11, the court must know whether you are a small business debtor so
                            that it
                            can set appropriate deadlines. If you indicate that you are a small business debtor, you must
                            attach your
                            most recent balance sheet, statement of operations, cash-flow statement, and federal income tax
                            return or if
                            any of these documents do not exist, follow the procedure in 11 U.S.C. § 1116(1)(B).
                        </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="chapter11"
                                value="I am not filing under Chapter 11">
                            <label class="form-check-label" for="inlineCheckbox1"> No. I am not filing under Chapter
                                11.</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="chapter11"
                                value="I am filing under Chapter 11, but I am NOT a small business debtor according to the definition in the Bankruptcy Code">
                            <label class="form-check-label" for="inlineCheckbox2"> No. I am filing under Chapter 11, but I
                                am NOT a small business debtor according to the definition in the Bankruptcy Code. </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="chapter11"
                                value="I am filing under Chapter 11, I am a small business debtor according to the definition in the Bankruptcy Code, and I do not choose to proceed under Subchapter V of Chapter 11.">
                            <label class="form-check-label" for="inlineCheckbox2"> Yes. I am filing under Chapter 11, I am
                                a small business debtor according to the definition in the Bankruptcy
                                Code, and I do not choose to proceed under Subchapter V of Chapter 11 </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="chapter11"
                                value="I am filing under Chapter 11, I am a small business debtor according to the definition in the Bankruptcy Code, and I choose to proceed under Subchapter V of Chapter 11">
                            <label class="form-check-label" for="inlineCheckbox2"> Yes. I am filing under Chapter 11, I am
                                a small business debtor according to the definition in the Bankruptcy
                                Code, and I do not choose to proceed under Subchapter V of Chapter 11 </label>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="my-4" style="text-decoration: underline;">Explain Your Efforts to Receive a Briefing
                    About Credit Counseling</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold my-3">Tell the court whether you have received a briefing about credit
                            counseling</h6>
                        <p>he law requires that you receive a briefing about credit counseling before you file for
                            bankruptcy. You must truthfully check one of the following choices. If you cannot do so, you are
                            not eligible to file</p>
                        <p>if you file anyway, the court can dismiss your case, you will lose whatever filing fee you paid,
                            and your creditors can begin collection activities again.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold mb-3">About Debtor 1:</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="credit_couseling1" value="1">
                            <label class="form-check-label" for="inlineCheckbox1"> I received a briefing from an approved
                                credit counseling agency within the 180 days before Ifiled this bankruptcy petition, and I
                                received a certificate of completion. </label>
                        </div>
                        <p>Attach a copy of the certificate and the payment plan, if any, that you developed with the
                            agency.</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="credit_couseling1" value="2">
                            <label class="form-check-label" for="inlineCheckbox2"> I received a briefing from an approved
                                credit counseling agency within the 180 days before Ifiled this bankruptcy petition, but I
                                do not have a certificate of completion. </label>
                        </div>
                        <p>ithin 14 days after you file this bankruptcy petition, you MUST file a copy of the certificate
                            and payment plan, if any.</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="credit_couseling1" value="3">
                            <label class="form-check-label" for="inlineCheckbox2"> I certify that I asked for credit
                                counseling services from an approved agency, but wasunable to obtain those services during
                                the 7days after I made my request, and exigentcircumstances merit a 30-day temporary waiver
                                of the requirement. </label>
                        </div>
                        <small class="d-block">To ask for a 30-day temporary waiver of the requirement, attach a
                            separate sheet explainingwhat efforts you made to obtain the briefing, why you were unable to
                            obtain it before you filed for bankruptcy, and what exigent circumstances required you to file
                            this case</small>
                        <small class="d-block">your case may be dismissed if the court is dissatisfied with your
                            reasons for not receiving a briefing before you filed for bankruptcy.</small>
                        <small class="d-block">If the court is satisfied with your reasons, you must
                            still receive a briefing within 30 days after you file.
                            You must file a certificate from the approved
                            agency, along with a copy of the payment plan you
                            developed, if any. If you do not do so, your case
                            may be dismissed. <br>
                            Any extension of the 30-day deadline is granted
                            only for cause and is limited to a maximum of 15
                            days.
                        </small>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="credit_couseling1" value="4">
                            <label class="form-check-label" for="inlineCheckbox2"> I am not required to receive a briefing
                                about
                                credit counseling because of:
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="credit_couseling_reason1"
                                value="Incapacity">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Incapacity
                            </label>
                        </div>
                        <small class="d-block">I have a mental illness or a mentaldeficiency that makes meincapable
                            of realizing or making rational decisions about finances. </small>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="credit_couseling_reason1"
                                value="Disability">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Disability
                            </label>
                        </div>
                        <small class="d-block"> My physical disability causes me
                            to be unable to participate in a
                            briefing in person, by phone, or
                            through the internet, even after I
                            reasonably tried to do so</small>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="credit_couseling_reason1"
                                value="Active duty">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Active duty
                            </label>
                        </div>
                        <small class="d-block"> I am currently on active military duty in a military combat
                            zone.</small>
                        <p>If you believe you are not required to receive a
                            briefing about credit counseling, you must file a
                            motion for waiver of credit counseling with the court.
                        </p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold mb-3">About Debtor 2 (Spouse Only in a Joint Case):</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="credit_couseling2" value="1">
                            <label class="form-check-label" for="inlineCheckbox1"> I received a briefing from an approved
                                credit counseling agency within the 180 days before Ifiled this bankruptcy petition, and I
                                received a certificate of completion. </label>
                        </div>
                        <p>Attach a copy of the certificate and the payment plan, if any, that you developed with the
                            agency.</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="credit_couseling2" value="2">
                            <label class="form-check-label" for="inlineCheckbox2"> I received a briefing from an approved
                                credit counseling agency within the 180 days before Ifiled this bankruptcy petition, but I
                                do not have a certificate of completion. </label>
                        </div>
                        <p>ithin 14 days after you file this bankruptcy petition, you MUST file a copy of the certificate
                            and payment plan, if any.</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="credit_couseling2" value="3">
                            <label class="form-check-label" for="inlineCheckbox2"> I certify that I asked for credit
                                counseling services from an approved agency, but wasunable to obtain those services during
                                the 7days after I made my request, and exigentcircumstances merit a 30-day temporary waiver
                                of the requirement. </label>
                        </div>
                        <small class="d-block">To ask for a 30-day temporary waiver of the requirement, attach a
                            separate sheet explainingwhat efforts you made to obtain the briefing, why you were unable to
                            obtain it before you filed for bankruptcy, and what exigent circumstances required you to file
                            this case</small>
                        <small class="d-block">your case may be dismissed if the court is dissatisfied with your
                            reasons for not receiving a briefing before you filed for bankruptcy.</small>
                        <small class="d-block">If the court is satisfied with your reasons, you must
                            still receive a briefing within 30 days after you file.
                            You must file a certificate from the approved
                            agency, along with a copy of the payment plan you
                            developed, if any. If you do not do so, your case
                            may be dismissed. <br>
                            Any extension of the 30-day deadline is granted
                            only for cause and is limited to a maximum of 15
                            days.
                        </small>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="credit_couseling2" value="4">
                            <label class="form-check-label" for="inlineCheckbox2"> I am not required to receive a briefing
                                about
                                credit counseling because of:
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="credit_couseling_reason2"
                                value="Incapacity">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Incapacity
                            </label>
                        </div>
                        <small class="d-block">I have a mental illness or a mentaldeficiency that makes meincapable
                            of realizing or making rational decisions about finances. </small>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="credit_couseling_reason2"
                                value="Disability">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Disability
                            </label>
                        </div>
                        <small class="d-block"> My physical disability causes me
                            to be unable to participate in a
                            briefing in person, by phone, or
                            through the internet, even after I
                            reasonably tried to do so</small>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="credit_couseling_reason2"
                                value="Active duty">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Active duty
                            </label>
                        </div>
                        <small class="d-block"> I am currently on active military duty in a military combat
                            zone.</small>
                        <p>If you believe you are not required to receive a
                            briefing about credit counseling, you must file a
                            motion for waiver of credit counseling with the court.
                        </p>
                    </div>
                </div>
                <hr>
                <h4 class="my-4" style="text-decoration: underline;"> Answer These Questions for Reporting
                    Purposes</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold"> What kind of debts do you have?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <h6 class="font-weight-bold">
                            6a. Are your debts primarily consumer debts? Consumer debts are defined in 11 U.S.C. § 101(8) as
                            “incurred by an individual primarily for a personal, family, or household purpose.”
                        </h6>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="consumer_debts" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineradio2"> No. Go to line 16b
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="consumer_debts" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Yes. Go to line 17.
                            </label>
                        </div>
                        <h6 class="font-weight-bold">
                            6b. Are your debts primarily business debts? Business debts are debts that you incurred to
                            obtain
                            money for a business or investment or through the operation of the business or investment.
                        </h6>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="business_debts" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> No. Go to line 16b
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="business_debts" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Yes. Go to line 17.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>16c. State the type of debts you owe that are not consumer debts or business
                                debts</label>
                            <input type="text" class="form-control" name="debit_type" value="{{ old('debit_type') }}"
                                name="">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold"> What kind of debts do you have?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <h6 class="font-weight-bold">
                            . Are you filing under Chapter 7? Do you estimate that after any exempt property is excluded and
                            administrative expenses are paid that funds will be available for distribution to unsecured
                            creditors?
                        </h6>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="under_chapter7" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> No. I am not filing
                                under Chapter 7. Go to line 18.
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="under_chapter7" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2"> Yes. I am filing under
                                Chapter 7. Do you estimate that after any exempt property is excluded and
                                administrative expenses are paid that funds will be available to distribute to unsecured
                                creditors?
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="admin_expense" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="admin_expense" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">No
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold"> How many creditors do you estimate that you owe?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="1-49">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">1-49
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="1,000-5,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">1,000-5,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="25,001-50,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">25,001-50,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="50-99">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">50-99
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="5,001-10,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">5,001-10,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="50,001-100,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">50,001-100,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="100-199">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">100-199
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="10,001-25,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">10,001-25,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own"
                                        value="More than 100,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">More than
                                        100,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="credit_own" value="200-999">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">200-999
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold">How much do you estimate your assets to be worth?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth" value="$0-$50,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$0-$50,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$1,000,001-$10 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$1,000,001-$10
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$500,000,001-$1 billion">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$500,000,001-$1
                                        billion
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$50,001-$100,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$50,001-$100,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$10,000,001-$50 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$10,000,001-$50
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$1,000,000,001-$10 billion">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$1,000,000,001-$10 billion
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$100,001-$500,000">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$100,001-$500,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$50,000,001-$100 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$50,000,001-$100
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$10,000,000,001-$50 billion">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$10,000,000,001-$50 billion
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$500,001-$1 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$500,001-$1
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="$100,000,001-$500 million">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$100,000,001-$500 million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="asset_worth"
                                        value="More than $50 billion">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">More than $50
                                        billion
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6 class="font-weight-bold">How much do you
                            estimate your liabilities
                            to be?</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities" value="$0-$50,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$0-$50,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$1,000,001-$10 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$1,000,001-$10
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$500,000,001-$1 billion">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$500,000,001-$1
                                        billion
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$50,001-$100,000">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$50,001-$100,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$10,000,001-$50 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$10,000,001-$50
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$1,000,000,001-$10 billion">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$1,000,000,001-$10 billion
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$100,001-$500,000">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$100,001-$500,000
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$50,000,001-$100 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$50,000,001-$100
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$10,000,000,001-$50 billion">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$10,000,000,001-$50 billion
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$500,001-$1 million">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">$500,001-$1
                                        million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="$100,000,001-$500 million">
                                    <label class="form-check-label font-weight-bold"
                                        for="inlineCheckbox2">$100,000,001-$500 million
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="radio" name="liabilities"
                                        value="More than $50 billion">
                                    <label class="form-check-label font-weight-bold" for="inlineCheckbox2">More than $50
                                        billion
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h4 class="my-4" style="text-decoration: underline;"> Sign Below</h4>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6>For you</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>I have examined this petition, and I declare under penalty of perjury that the information
                            provided is true and
                            correct. <br>
                            f I have chosen to file under Chapter 7, I am aware that I may proceed, if eligible, under
                            Chapter 7, 11,12, or 13
                            of title 11, United States Code. I understand the relief available under each chapter, and I
                            choose to proceed
                            under Chapter 7. <br>
                            If no attorney represents me and I did not pay or agree to pay someone who is not an attorney to
                            help me fill out
                            this document, I have obtained and read the notice required by 11 U.S.C. § 342(b). <br>
                            I request relief in accordance with the chapter of title 11, United States Code, specified in
                            this petition.
                            I understand making a false statement, concealing property, or obtaining money or property by
                            fraud in connection
                            with a bankruptcy case can result in fines up to $250,000, or imprisonment for up to 20 years,
                            or both. <br>
                            18 U.S.C. §§ 152, 1341, 1519, and 3571.
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label>Signature of Debtor 1</label>
                                    <input type="text" class="form-control" name="signature_debtor1"
                                        value="{{ old('signature_debtor1') }}" name="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label>Signature of Debtor 2</label>
                                    <input type="text" class="form-control" name="signature_debtor2"
                                        value="{{ old('signature_debtor2') }}" name="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label> Executed on</label>
                                    <input type="date" class="form-control" name="executed_date1"
                                        value="{{ old('executed_date1') }}" name="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label> Executed on</label>
                                    <input type="date" class="form-control" name="executed_date2"
                                        value="{{ old('executed_date2') }}" name="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6>For your attorney, if you are
                            represented by one
                        </h6>
                        <h6>if you are not represented
                            by an attorney, you do not
                            need to file this page
                        </h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>I, the attorney for the debtor(s) named in this petition, declare that I have informed the
                            debtor(s) about eligibility
                            to proceed under Chapter 7, 11, 12, or 13 of title 11, United States Code, and have explained
                            the relief
                            available under each chapter for which the person is eligible. I also certify that I have
                            delivered to the debtor(s)
                            the notice required by 11 U.S.C. § 342(b) and, in a case in which § 707(b)(4)(D) applies,
                            certify that I have no
                            knowledge after an inquiry that the information in the schedules filed with the petition is
                            incorrect.
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label>Signature of Attorney for Debtor </label>
                                    <input type="text" class="form-control" name="attorney_signature"
                                        value="{{ old('attorney_signature') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="attorney_date"
                                        value="{{ old('attorney_date') }}">
                                </div>
                            </div>
                            <div class="col-12  mt-3">
                                <div class="form-group">
                                    <label>Printed name
                                    </label>
                                    <input type="text" class="form-control" name="printed_name"
                                        value="{{ old('printed_name') }}">
                                </div>
                            </div>
                            <div class="col-12  mt-3">
                                <div class="form-group">
                                    <label>Firm name</label>
                                    <input type="text" class="form-control" name="firm_name"
                                        value="{{ old('firm_name') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 mt-3">
                                <div class="form-group">
                                    <label> Address</label>
                                    <input type="text" class="form-control" name="firm_address"
                                        value="{{ old('firm_address') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label> Contact Phone</label>
                                    <input type="text" class="form-control" name="firm_phone"
                                        value="{{ old('firm_phone') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="firm_email"
                                        value="{{ old('firm_email') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label> Bar Number </label>
                                    <input type="text" class="form-control" name="bar_number"
                                        value="{{ old('bar_number') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label> State</label>
                                    <input type="text" class="form-control" name="bar_state"
                                        value="{{ old('bar_state') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h6>For you if you are filing this bankruptcy without an attorney <br> If you are represented by an
                            attorney, you do not need to file this page.</h6>
                    </div>
                    <div class="col-12 col-md-8">
                        <p>The law allows you, as an individual, to represent yourself in bankruptcy court, but you
                            should understand that many people find it extremely difficult to represent
                            themselves successfully. Because bankruptcy has long-term financial and legal
                            consequences, you are strongly urged to hire a qualified attorney. <br>
                            To be successful, you must correctly file and handle your bankruptcy case. The rules are very
                            technical, and a mistake or inaction may affect your rights. For example, your case may be
                            dismissed because you did not file a required document, pay a fee on time, attend a meeting or
                            hearing, or cooperate with the court, case trustee, U.S. trustee, bankruptcy administrator, or
                            audit
                            firm if your case is selected for audit. If that happens, you could lose your right to file
                            another
                            case, or you may lose protections, including the benefit of the automatic stay. <br>
                            You must list all your property and debts in the schedules that you are required to file with
                            the
                            court. Even if you plan to pay a particular debt outside of your bankruptcy, you must list that
                            debt
                            in your schedules. If you do not list a debt, the debt may not be discharged. If you do not list
                            property or properly claim it as exempt, you may not be able to keep the property. The judge can
                            also deny you a discharge of all your debts if you do something dishonest in your bankruptcy
                            case, such as destroying or hiding property, falsifying records, or lying. Individual bankruptcy
                            cases are randomly audited to determine if debtors have been accurate, truthful, and complete.
                            Bankruptcy fraud is a serious crime; you could be fined and imprisoned. <br>
                            If you decide to file without an attorney, the court expects you to follow the rules as if you
                            had
                            hired an attorney. The court will not treat you differently because you are filing for yourself.
                            To be
                            successful, you must be familiar with the United States Bankruptcy Code, the Federal Rules of
                            Bankruptcy Procedure, and the local rules of the court in which your case is filed. You must
                            also
                            be familiar with any state exemption laws that apply.
                        </p>
                        <p class="mt-3 mb-1">Are you aware that filing for bankruptcy is a serious action with
                            long-term financial and legal
                            consequences?
                        </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="long_term" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="long_term" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">No
                            </label>
                        </div>
                        <p class="mt-3 mb-1">Are you aware that bankruptcy fraud is a serious crime and that if your
                            bankruptcy forms are
                            inaccurate or incomplete, you could be fined or imprisoned?
                        </p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="aware_fraud" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="aware_fraud" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">No
                            </label>
                        </div>
                        <p class="mt-3 mb-1">Did you pay or agree to pay someone who is not an attorney to help you
                            fill out your bankruptcy forms?</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="someone_pay" value="Yes">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">Yes
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="someone_pay" value="No">
                            <label class="form-check-label font-weight-bold" for="inlineCheckbox2">No
                            </label>
                        </div>
                        <p>By signing here, I acknowledge that I understand the risks involved in filing without an
                            attorney. I
                            have read and understood this notice, and I am aware that filing a bankruptcy case without an
                            attorney may cause me to lose my rights or property if I do not properly handle the case.
                        </p>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Signature of Attorney for Debtor 1 </label>
                                    <input type="text" class="form-control" name="signature1"
                                        value="{{ old('signature1') }}">
                                </div>
                                <div class="form-group">
                                    <label>Date </label>
                                    <input type="date" class="form-control" name="signature1_date"
                                        value="{{ old('signature1_date') }}">
                                </div>
                                <div class="form-group">
                                    <label>Contact Phone</label>
                                    <input type="text" class="form-control" name="signature1_phone"
                                        value="{{ old('signature1_phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>Cell Phone </label>
                                    <input type="text" class="form-control" name="signature1_cell"
                                        value="{{ old('signature1_cell') }}">
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="text" class="form-control" name="signature1_email"
                                        value="{{ old('signature1_email') }}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Signature of Attorney for Debtor 2 </label>
                                    <input type="text" class="form-control" name="signature2"
                                        value="{{ old('signature2') }}">
                                </div>
                                <div class="form-group">
                                    <label>Date </label>
                                    <input type="date" class="form-control" name="signature2_date"
                                        value="{{ old('signature2_date') }}">
                                </div>
                                <div class="form-group">
                                    <label>Contact Phone</label>
                                    <input type="text" class="form-control" name="signature2_phone"
                                        value="{{ old('signature2_phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>Cell Phone </label>
                                    <input type="text" class="form-control" name="signature2_cell"
                                        value="{{ old('signature2_cell') }}">
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="text" class="form-control" name="signature2_email"
                                        value="{{ old('signature2_email') }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-danger">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End User Form -->
@endsection
