<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankruptyCourtController extends Controller
{
    public function index()
    {
        
        return view('client.bankruptycourt.create');
    }
}
