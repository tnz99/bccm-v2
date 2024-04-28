<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class EditClimateController extends Controller
{
    public function editclimate()
    {
        return view('admin.edit-climate');
    }
    
}