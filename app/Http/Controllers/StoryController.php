<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class StoryController extends Controller
{
    public function story()
    {
        return view('admin.story');
    }
    
}