<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ClimateController extends Controller
{
    public function climate()
    {
        return view('admin.climate');
    }
    
}