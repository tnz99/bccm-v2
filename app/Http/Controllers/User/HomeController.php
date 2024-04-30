<?php

namespace App\Http\Controllers\User;

use App\Models\EditHome;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $darkThemeFlag = false;
        $cnavBg = "the-climate-cnav-bg";
        $cnavInnerBorder = "border-gray";
        $edit_home = EditHome::orderBy('updated_at', 'desc')->first();
        return view('user.home', compact('darkThemeFlag', 'cnavBg', 'cnavInnerBorder', 'edit_home'));
    }


}
