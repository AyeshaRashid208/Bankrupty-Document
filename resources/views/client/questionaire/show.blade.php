@extends('layouts.admin')
@section('content')

<div class="content-body">
    <div class="dashboard-sec">
    <div class="card">
        <div class="card-header">
            Questionaire
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('client.questionaire.index') }}">
                        Back
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                ID
                            </th>
                            <td>
                                {{ $q->id??'' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Full Name
                            </th>
                            <td>
                                {{ $q->name??'' }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Social Security Number
                            </th>
                            <td>
                                {{$q->security_no??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Date of Birth and Age
                            </th>
                            <td>
                                {{$q->dob??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Spouse’s full name
                            </th>
                            <td>
                                {{$q->spouse_name??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Spouse’s Social Security Number
                            </th>
                            <td>
                                {{$q->spouse_security_no??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Spouse’s Date of birth & Age
                            </th>
                            <td>
                                {{$q->spouse_dob??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                List of other name
                            </th>
                            <td>
                                {{$q->list_name??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Names to papers and checks during the last eight years
                            </th>
                            <td>
                                {{$q->paper_name??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                List all address
                            </th>
                            <td>
                                {{$q->list_address??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Address Date
                            </th>
                            <td>
                                {{$q->list_address_date??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Have you or your spouse ever been involved before in a bankruptcy (chapter 7, 11, 12, or 13)?
                            </th>
                            <td>
                                {{$q->involved??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Do you want to pay your filing fee in 4 installments?
                            </th>
                            <td>
                                {{$q->installment??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Do you want to pay your filing fee in full?
                            </th>
                            <td>
                                {{$q->fee_full??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Do you want to file for a waiver to waive your filing fee?
                            </th>
                            <td>
                                {{$q->fee_file??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Do you own a business?
                            </th>
                            <td>
                                {{$q->business??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Have you taken an approved Credit Counseling Course?
                            </th>
                            <td>
                                {{$q->credit_course??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                If yes, the date you completed it?
                            </th>
                            <td>
                                {{$q->complete??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Are your debts primarily consumer debts?
                            </th>
                            <td>
                                {{$q->consumer_debt??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Are you aware that filing for bankruptcy is a serious action with long-term financial and legal consequences?
                            </th>
                            <td>
                                {{$q->long_term??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Are you aware that bankruptcy fraud is a serious crime and that if your bankruptcy forms are inaccurate or incomplete, you could be fined or imprisoned?
                            </th>
                            <td>
                                {{$q->aware_fraud??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Did you pay or agree to pay someone who is not an attorney to help you fill out your bankruptcy forms?
                            </th>
                            <td>
                                {{$q->pay_someone??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Attach Bankruptcy Petition Preparer’s Notice, Declaration, and Signature (Official Form 119).
                            </th>
                            <td>
                                {{$q->person_name??''}}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                Please list your creditors (companies that you owe) name and addresses.
                            </th>
                            <td>
                                {{$q->person_detail??''}}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('client.questionaire.index') }}">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
