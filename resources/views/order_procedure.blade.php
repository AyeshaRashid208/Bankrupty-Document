@php
$data = content();
@endphp
@extends('layouts.app')
@section('content')
    <!-- User Form -->
    <!-- Page Title -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Introduction to Order Procedure</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Loan -->
    <div class="loan-area pt-5">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-md-9 mx-auto ">
                    <div class="widget-area bg-light">
                        <div class="services widget-item">
                            {!!$data['#order_pro_detail']['description']??''!!}

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <div class="loan-item ">
                        <div class="loan-img mt-4">
                            <h2 class="text-center">HOW BANKRUPTCY ORDER PROCEDURE</h2>

                        </div>
                        <ul>
                            @foreach ($order_pro as $item)
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    {{$item->heading}}
                                </h3>
                                <p>{!!$item->description!!}</p>
                            </li>
                            @endforeach
                            {{-- <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Your possessions
                                </h3>
                                <p>While much of what you own will be sold to repay your debts, some of your personal
                                    property and even retirement accounts, such as IRAs and 401K plans may be exempt —
                                    although there are limits on exemptions both at state and federal levels. <br>

                                    According to the credit bureau Experian, the following are examples of exemptions.
                                    Please be sure to check federal and your state laws for details.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Personal home (otherwise known as “homestead”):
                                </h3>
                                <p>You may retain up to $23,675 of equity in homes, mobile homes, coops, or burial plots.
                                    Also, if you do not use all of this exemption, then you can use up to $11,850 for other
                                    property.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Home Equity:
                                </h3>
                                <p>If the equity in your home is less than $23,675, your court-appointed bankruptcy trustee
                                    may decide to not sell the home, since there won’t be any proceeds to pay off your debts
                                    after applying for your exemption. Still, your lender may foreclose on your property if
                                    you are behind on your mortgage payments. If your equity exceeds the limit, then your
                                    house may be sold, you then get the exemption amount, and the rest of the proceeds will
                                    be used to pay off your debts.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Motor Vehicle:
                                </h3>
                                <p>This is up to $3,775.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Personal Property:
                                </h3>
                                <p>You get up to $600 per item and a total exemption of $12,625 for personal property
                                    including appliances, books, musical instruments, and pets.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Retirement Accounts:
                                </h3>
                                <p>Many retirement accounts are protected up to a certain amount, including your 401(k) or
                                    403(b) and up to $1,283,025 in Individual Retirement Account (IRA) savings.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Health Aids:
                                </h3>
                                <p>The entire value is fully exempt.</p>
                            </li>
                            <li>
                                <h3>
                                    <i class='bx bx-check'></i>
                                    Jewelry:
                                </h3>
                                <p>This is up to $1,600.</p>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="details-client my-4">
                        <h2>{{$data['#order_pro_bottom']['heading']??''}}</h2>
                        {!!$data['#order_pro_bottom']['description']??''!!}
                        

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Loan -->
    <!-- End User Form -->
@endsection
