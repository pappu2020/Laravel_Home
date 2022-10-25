<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerQuotesController extends Controller
{
    function customerQuotesPage(){
        return view("admin.customerQuotes.customerQuotesPage");
    }
}
