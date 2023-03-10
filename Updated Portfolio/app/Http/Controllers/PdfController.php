<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;

class PdfController extends Controller
{
     function index()
    {
          return view("admin.displayPdf");
       
    }
}
